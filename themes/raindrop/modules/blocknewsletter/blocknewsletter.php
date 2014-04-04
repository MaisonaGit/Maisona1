<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlocknewsletterBSK extends Blocknewsletter{
    /**
    * Check if this mail is registered for newsletters
    *
    * @param unknown_type $customerEmail
    * @return int -1 = not a customer and not registered
    * 				0 = customer not registered
    * 				1 = registered in block
    * 				2 = registered in customer
    */
   private function isNewsletterRegistered($customerEmail)
   {
           $sql = 'SELECT `email`
                           FROM '._DB_PREFIX_.'newsletter
                           WHERE `email` = \''.pSQL($customerEmail).'\'
                           AND id_shop = '.$this->context->shop->id;

           if (Db::getInstance()->getRow($sql))
                   return self::GUEST_REGISTERED;

           $sql = 'SELECT `newsletter`
                           FROM '._DB_PREFIX_.'customer
                           WHERE `email` = \''.pSQL($customerEmail).'\'
                           AND id_shop = '.$this->context->shop->id;

           if (!$registered = Db::getInstance()->getRow($sql))
                   return self::GUEST_NOT_REGISTERED;

           if ($registered['newsletter'] == '1')
                   return self::CUSTOMER_REGISTERED;

           return self::CUSTOMER_NOT_REGISTERED;
   }
    
    /**
    * Register in block newsletter
    */
   private function newsletterRegistration()
   {
           if (empty($_POST['email']) || !Validate::isEmail($_POST['email']))
                   return $this->error = $this->l('Invalid email address');

           /* Unsubscription */
           else if ($_POST['action'] == '1')
           {
                   $register_status = $this->isNewsletterRegistered($_POST['email']);
                   if ($register_status < 1)
                           return $this->error = $this->l('This email address is not registered.');
                   else if ($register_status == self::GUEST_REGISTERED)
                   {
                           if (!Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'newsletter WHERE `email` = \''.pSQL($_POST['email']).'\' AND id_shop = '.$this->context->shop->id))
                                   return $this->error = $this->l('An error occurred while attempting to unsubscribe.');
                           return $this->valid = $this->l('Unsubscription successful');
                   }
                   else if ($register_status == self::CUSTOMER_REGISTERED)
                   {
                           if (!Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'customer SET `newsletter` = 0 WHERE `email` = \''.pSQL($_POST['email']).'\' AND id_shop = '.$this->context->shop->id))
                                   return $this->error = $this->l('An error occurred while attempting to unsubscribe.');
                           return $this->valid = $this->l('Unsubscription successful');
                   }
           }
           /* Subscription */
           else if ($_POST['action'] == '0')
           {
                   $register_status = $this->isNewsletterRegistered($_POST['email']);
                   if ($register_status > 0)
                           return $this->error = $this->l('This email address is already registered.');

                   $email = pSQL($_POST['email']);
                   if (!$this->isRegistered($register_status))
                   {
                           if (Configuration::get('NW_VERIFICATION_EMAIL'))
                           {
                                   // create an unactive entry in the newsletter database
                                   if ($register_status == self::GUEST_NOT_REGISTERED)
                                           $this->registerGuest($email, false);

                                   if (!$token = $this->getToken($email, $register_status))
                                           return $this->error = $this->l('An error occurred during the subscription process.');

                                   $this->sendVerificationEmail($email, $token);

                                   return $this->valid = $this->l('A verification email has been sent. Please check your inbox.');
                           }
                           else
                           {
                                   if ($this->register($email, $register_status))
                                           $this->valid = $this->l('You have successfully subscribed.');
                                   else
                                           return $this->error = $this->l('An error occurred during the subscription process.');

                                   if ($code = Configuration::get('NW_VOUCHER_CODE'))
                                           $this->sendVoucher($email, $code);

                                   if (Configuration::get('NW_CONFIRMATION_EMAIL'))
                                           $this->sendConfirmationEmail($email);
                           }
                   }
           }
   }
    
    public function hookDisplayBlueBlock($params){
        if (Tools::isSubmit('submitNewsletter')){
            $this->newsletterRegistration();
            if ($this->error){
                $this->smarty->assign(array(
                    'color'     => 'red',
                    'msg'       => $this->error,
                    'nw_value'  => isset($_POST['email']) ? pSQL($_POST['email']) : false,
                    'nw_error'  => true,
                    'action'    => $_POST['action']
                ));
            } else if ($this->valid){
                $this->smarty->assign(array(
                    'color'     => 'green',
                    'msg'       => $this->valid,
                    'nw_error'  => false
                ));
            }
        }
        $this->smarty->assign('this_path', $this->_path);

        return $this->display(__FILE__, 'blocknewsletter_home.tpl');
    }
}
