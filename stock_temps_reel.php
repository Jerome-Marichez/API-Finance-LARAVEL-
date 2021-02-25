<?php include('../../../css/mobile/puc.php');?>
<style type="text/css">

.checkbox{width:calc(100% - 1px);height:48px;display:block;background-color:;margin:0 0 17px;padding:0;}
.checkbox>div{width:calc(100%);height:48px;border:1px solid #d6d4d4;}
.checkbox>label{position:relative;font-size:14px;width:calc(100% - 50px);height:48px;border:1px solid #d6d4d4;border-right:none;padding:0;margin:0;display:block;line-height:50px;color:#646464;}
.checkbox>input{position:absolute;top:0;left:-9999px;}
.checkbox>input:not(:checked) + label:before,.checkbox>input:checked + label:before{content: '';position:absolute;right:-50px;top:-1px;width:48px;height:48px;border:1px solid #d6d4d4;}
.checkbox>input:not(:checked) + label:after,.checkbox>input:checked + label:after{content:url(<?php echo $url_main;?>img/bfc-checkbox-input.jpg);position:absolute;right:-50px;top:-1px;width:48px;height:48px;border:1px solid #d6d4d4;}
.checkbox>input:not(:checked) + label:after {opacity: 0;}
.checkbox>input:checked + label:after {opacity: 1;}

.checkbox-e{width:calc(100%);height:48px;display:block;background-color:;margin:0 0 17px;padding:0;}
.checkbox-e>div{width:calc(100% - 2px);height:48px;border:1px solid #d6d4d4;}
.checkbox-e>label{position:relative;font-size:14px;width:calc(100% - 50px);height:48px;border:1px solid #c03232;border-right:none;padding:0;margin:0;display:block;line-height:50px;color:#646464;}
.checkbox-e>input{position:absolute;top:0;left:-9999px;}
.checkbox-e>input:not(:checked) + label:before,.checkbox-e>input:checked + label:before{content: '';position:absolute;right:-50px;top:-1px;width:48px;height:48px;border:1px solid #c03232;}
.checkbox-e>input:not(:checked) + label:after,.checkbox-e>input:checked + label:after{content:url(<?php echo $url_main;?>img/bfc-checkbox-input.jpg);position:absolute;right:-50px;top:-1px;width:48px;height:48px;border:1px solid #c03232;}
.checkbox-e>input:not(:checked) + label:after {opacity: 0;}
.checkbox-e>input:checked + label:after {opacity: 1;}

#info_ps{font-size:14px;letter-spacing:2px;margin:0px auto 30px;display:none;}
#infoslegales>span{padding:0;display:block;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#aeacac;font-weight:bold;margin:15px 0 30px;}
</style>

<?php

$split_texte = explode("|", $id);
?>


<div id="block-puc">
<div id="puc-content">
<span id="puc-title">Vérifier la disponibilité en boutique<div class="sprite sprite-close-pop-up" onclick="pop_up(0);"></div></span>

<form id="puc-div">
<div class="bfc-100" id="bfc-message"><input class="valueCC" id="objet" type="text" name="objet" value="<?php echo $split_texte[1];?>"/></div>
<div class="bfc-100" id="bfc-message"><textarea class="valueCC" name="message" id="message" >Bonjour,  pouvez vous m'informer sur la disponibilité de ce produit ? <?php echo $split_texte[1];?>. Bien cordialement</textarea></div>
<div class="bfc-100">
<input class="valueCC" id="nom" type="text" name="nom" value="" placeholder="Votre nom" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
<input class="valueCC" id="prenom" type="text" name="prenom" value="" placeholder="Votre prénom" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
</div>
<div class="bfc-100">
<input class="valueCC" id="email" type="text" name="email" value="" placeholder="Votre email" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
<input class="valueCC" id="telephone" type="text" name="telephone" value="" placeholder="Votre téléphone" onChange="check_champ(this.name);" onKeyUp="check_champ(this.name);"/>
</div>
<div id="infoslegales"><span>Nous nous engageons à vous répondre dans les 24 Heures</span></div>
<div class="bfc-button" id="bfc-button" onClick="sendContact();"><span>Envoyer</span></div>
<input class="valueCC" type="hidden" name="url" value="<?php echo  $split_texte[0];?>"/>
</form>

</div>
</div>
