<div class="f14464818461">
  <ul class="f14464818462">
    <li class="f14464818463"><?php echo L('_DANGQIANWEIZHI_')?>：</li>
    <li class="f14464818464"><a class="f14464818465" href="index.php"><?php echo L('_SHOUYE_')?></a> </li>
    <?php   if($classify_id!='')  {  	function recursive_crumbs($classify_id)  	{  		$classify=M('classify')->where(array('classify_id'=>$classify_id))->find();  		if($classify['level_id']>2)  		{  			recursive_crumbs(array('classify_id'=>$classify['classify_pid']));  			?>
    <li class="f14464818464"> <span class="f14464818467">&gt;</span> <a class="f14464818468" href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>"><?php echo $classify['classify_name'];?></a></li>
    <?php  		}  	}  	recursive_crumbs(default_classify_id(217));  }?>
  </ul>
</div>
