<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input type="text" class="form-control"  name="s" id="s" placeholder="<?php esc_attr_e('搜索...','key'); ?>"/>
    <span class="input-group-btn btn-default ">
    <button type="submit" class="btn"> <i class="fa fa-search"></i> </button>
    </span> </div>
</form>