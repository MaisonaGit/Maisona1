jQuery.fn.exists = function(){return this.length==0;}$('document').ready( function() {          $('#category, #manufacturer, #prices-drop, #best-sales, #new-products').mouseover(function(){        $('#product_list .product_img_link').each(function(){            var lienP = $(this).attr('href');            var contenu = $(this).html();            var xhr = new XMLHttpRequest();            var actuel = $(this);            var larg = $(this).width();            xhr.onreadystatechange = function() {            	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {            	   if(xhr.responseText != 'NULL'){                	    var info = JSON.parse(xhr.responseText);                        var newcontenu = contenu+'<div class="speAttr" style="width:'+parseInt(larg-10)+'px; display:none">';                        $.each(info,function(key, value){						    newcontenu = newcontenu + '<span class="titreAttrSpe">'+key+' :</span> <span class="contenuAttrSpe">';												    for (i=0; i<value.length; i++)						    {						        newcontenu = newcontenu + value[i];						    }												    newcontenu = newcontenu + '</span><br />';						});		                                                newcontenu = newcontenu+'</div>';                        actuel.html(newcontenu);                        $('.speAttr',$(actuel)).css('margin-top','-'+parseInt($('.speAttr',$(actuel)).height()+10)+'px');                    }                 }            };            if($('.speAttr').exists()){                xhr.open("GET","modules/hover_pl_taille/ajax.php?lienP="+lienP,true);                xhr.send(null);            }         });        $('#product_list .product_img_link').hover(            function(){                $('.speAttr',$(this)).show();            },            function(){               $('.speAttr',$(this)).hide();            }        );    });});