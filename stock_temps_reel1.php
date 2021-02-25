<style type="text/css">
#block-puc{width:auto;height:auto;margin:0 auto;}
.sprite-close-pop-up{width:30px;height:30px;background-position:-111px -98px;background-color:#aeacac;margin:0;padding:0;display:block;transition:800ms;-webkit-transition:800ms;-ms-transition:800ms;-moz-transition:800ms;cursor:pointer;position:absolute;top:30px;right:30px;}

#bfc{width:auto;height:auto;display:block;background-color:;text-align:center;}
#bfc>span{display:block;font-size:12px;letter-spacing:2px;text-transform:uppercase;color:#646464;font-weight:normal;margin:35px auto 5px;}
#bfc>form{width:calc(800px - 60px);height:auto;padding:0 30px 30px;display:block;margin:0 auto;background-color:;}
#bfc>form>.bfc-100{width:calc(100%);height:auto;display:block;margin:0 auto;background-color:;}
#bfc>form>.bfc-100>input{width:calc(100% - 32px);height:auto;border:1px solid #d6d4d4;padding:15px;color:#646464;font-size:14px;letter-spacing:2px;margin-top:30px;}
#bfc>form>.bfc-100>textarea{width:calc(100% - 32px);height:100px;margin:15px auto 15px;resize:none;border:1px solid #d6d4d4;padding:15px;color:#646464;font-size:14px;letter-spacing:2px;}
#bfc>form>.bfc-50{width:calc(100%);height:auto;display:block;margin:0 auto;padding:0;background-color:;}
#bfc>form>.bfc-50>input{width:calc(50% - 40px);height:auto;border:1px solid #d6d4d4;padding:15px;margin:0 5.5px;color:#646464;font-size:14px;letter-spacing:2px;}
#bfc>form>.bfc-50>input:first-child{margin-left:0;}
#bfc>form>.bfc-50>input:last-child{margin-right:0;}
#bfc>form>#infoslegales>span{padding:0 40px;display:block;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#aeacac;font-weight:bold;margin-top:30px;}


#bfc-checkbox{width:auto;height:auto;display:block;margin:25px auto 30px;}
#bfc-checkbox>label{position:relative;top:0;left:15px;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#aeacac;font-weight:normal;width:auto;height:auto;padding:0;margin:0;background-color:;}
#bfc-checkbox>input{position:absolute;top:0;left:-9999px;}
#bfc-checkbox>input:not(:checked) + label:before,#bfc-checkbox>input:checked + label:before{content:url(/nova/img/bfc-checkbox-not.jpg);position:absolute;left:-20px;top:0px;width:14px;height:14px;}
#bfc-checkboxx>input:not(:checked) + label:after,#bfc-checkbox>input:checked + label:after{content:url(/nova/img/bfc-checkbox.jpg);position:absolute;left:-20px;top:0px;width:14px;height:14px;}
#bfc-checkbox>input:not(:checked) + label:after {opacity: 0;}
#bfc-checkbox>input:checked + label:after {opacity: 1;}

#bfc-button{width:calc(100%);height:auto;display:block;margin:30px auto 0;text-align:center;background-color:#b3a672;color:white;padding:15px 0;cursor:pointer;font-weight:normal;font-size:12px;text-transform:uppercase;letter-spacing:2px;display:block;transition:800ms;-webkit-transition:800ms;-ms-transition:800ms;-moz-transition:800ms;text-decoration:none;}
#bfc-button:hover{background-color:#a0925c;}

</style>
<div id="block-puc">
<div class="sprite sprite-close-pop-up" onclick="pop_up(0);"></div>


<?php

$split_texte = explode("|", $id);
?>



<div id="bfc">
<span>Vérifier la disponibilité en boutique</span>
<form>
<div class="bfc-100" id="bfc-message"><input class="valueCC" id="objet" type="text" name="objet" value="<?php echo $split_texte[1];?>" placeholder="" value="<?php echo $produit['id'];?>" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/></div>
<div class="bfc-100" id="bfc-message"><textarea class="valueCC" name="message" id="message" placeholder="" value="" >Bonjour,  pouvez vous m'informer sur la disponibilité de ce produit ? <?php echo $split_texte[1];?>. Bien cordialement</textarea></div>
<div class="bfc-50" style="margin-bottom:15px;">
<input class="valueCC" id="nom" type="text" name="nom" value="" placeholder="Votre nom" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
<input class="valueCC" id="prenom" type="text" name="prenom" value="" placeholder="Votre prénom" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
</div>
<div class="bfc-50" style="margin-bottom:15px;">
<input class="valueCC" id="email" type="text" name="email" value="" placeholder="Votre email" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
<input class="valueCC" id="telephone" type="text" name="telephone" value="" placeholder="Votre téléphone" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
</div>
<div id="infoslegales"><span>Nous nous engageons à vous répondre dans les 24 Heures</span></div>
<div id="bfc-button" onclick="sendContact();"><span>Envoyer</span></div>
<input class="valueCC" type="hidden" name="url" value="<?php echo $split_texte[0];?>"/>
</form>
</div>
</div>
