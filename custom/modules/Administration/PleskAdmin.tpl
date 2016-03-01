<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php?module=Administration&action=PleskAdmin&do=save">

<div class="clearfix">&nbsp;</div>

    <span class="text-danger">
    {$error.main}
    </span>
    
<div class="row">
 <div class="col-md-3">
    
     <div class="form-group">
      <label for="plesk_username">Plesk username</label>
      <input type="text" name="plesk_username" value="{$config.username}"  class="form-control" id="plesk_username">
     </div>

     <div class="form-group">
      <label for="plesk_password">Plesk Password</label>
      <input type="password" name="plesk_password"  value="{$config.password}" class="form-control" id="plesk_password">
     </div>

</div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
    <div class="col-md-4" style="padding-bottom: 5px;">
        {$BUTTONS}
    </div>
</div>
</form>

