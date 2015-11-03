<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
  function $id(element) {
    return document.getElementById(element);
  }
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>


<link href="themes/my/css/movingbox.css" rel="stylesheet" type="text/css">
<script src="themes/my/js/jquery.movingboxes.js" type="text/javascript"></script>

<div class="w1140">
  <a href="#" class="product-back">Tilbage til produkter</a>
</div>
<div class="main">
  <div class="inmain w1140">
    <div class="main-l">
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <p class="product-number">
        <?php if ($this->_var['cfg']['show_goodssn']): ?>
        <span class="label"><?php echo $this->_var['goods']['goods_sn']; ?></span>
        <?php endif; ?>
      </p>
      <h1 class="product-name"><?php echo $this->_var['goods']['goods_name']; ?></h1>
      <p class="product-price"><?php echo $this->_var['goods']['shop_price_formated']; ?></p>
      <div id="product-variations" class="product-variations">
        <ul>
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <?php if ($this->_var['spec']['attr_type'] == 1 && $this->_var['spec_key'] == 211): ?>
          <li class="attribute attribute-color">
            <div class="label">
              Farve<span class="colon">:</span>
              <span class="selected-value">Black
                <span class="color-code">/ 050</span>
              </span>
            </div>
            <div class="value">
              <ul class="swatches swatch-list color clearfix">
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <li class="selected selectable">
                  <a  title="<?php echo $this->_var['value']['label']; ?>" class="swatchanchor colorvalue variationvalue adobe-variation <?php if ($this->_var['key'] == 0): ?> radonclick <?php endif; ?>" style="background-color: <?php echo $this->_var['value']['label']; ?>; background-size: 100%;">
                  </a>
                  <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" style="display: none;" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <?php if ($this->_var['spec']['attr_type'] == 1 && $this->_var['spec_key'] == 212): ?>
          <li class="attribute">
            <div class="label">
              Størrelse
              <span class="colon">:</span>
              <span class="size-chart-link">
                <a class="attributecontentlink adobe-sizechart" name="Størrelsesskema" title="Størrelsesskema">
                  Størrelsesskema
                </a>
              </span>
            </div>
            <div class="value">
              <ul class="swatches swatch-list size clearfix">
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <li class="emptyswatch selectable">
                  <a title="<?php echo $this->_var['value']['label']; ?>" class="swatchanchor variationvalue adobe-variation <?php if ($this->_var['key'] == 0): ?> radonclick <?php endif; ?>"><?php echo $this->_var['value']['label']; ?></a>
                  <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" style="display: none;" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <input name="number" type="hidden" id="number" value="1" size="4" onblur="changePrice()"/>
      </div>
      <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><button id="add-to-cart" type="button" value="Vælg Color og Size" class="button">Læg i kurv</button></a>
      <div class="share-this-dialogue">
        <a class="addthis_button_facebook socialshare-button at300b" title="Facebook" href="#"></a>
        <a class="addthis_button_twitter socialshare-button at300b" title="Tweet" href="#"></a>
        <a class="addthis_button_pinterest socialshare-button at300b"><span class="at_PinItButton"></span></a>
      </div>
    </form>
    </div>
    <div class="listpicture">
      <?php if ($this->_var['pictures']): ?>
      <ul id="movingb">
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic');if (count($_from)):
    foreach ($_from AS $this->_var['pic']):
?>
        <li><a><img src="<?php echo $this->_var['pic']['img_url']; ?>"></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <?php endif; ?>
      <script type="text/javascript">
        $(function(){
          $('#movingb').movingBoxes({
                        startPanel   : 1,       // 从第一个li开始
                        reducedSize  :.6,      // 缩小到原图50%的尺寸
                        wrap         : true,   // 无缝循环
                        buildNav     : true,  // 显示指示器效果
                        navFormatter : function(){return "&#9679;";} // 指示器格式，为空即会显示123
                      });
          $('.colorvalue').click(function () {
            $('.selected .swatchanchor').removeClass('radonclick');
            //$('.emptyswatch .swatchanchor').removeClass('radonclick');
            $(this).addClass('radonclick');
            $(this).next('input').click(); //swatchanchor colorvalue variationvalue adobe-variation #swatchanchor variationvalue adobe-variation
          });
          $('.emptyswatch .swatchanchor').click(function () {
            //$('.selected .swatchanchor').removeClass('radonclick');
            $('.emptyswatch .swatchanchor').removeClass('radonclick');
            $(this).addClass('radonclick');
            $(this).next('input').click(); //swatchanchor colorvalue variationvalue adobe-variation #swatchanchor variationvalue adobe-variation
          });
        });
      </script>
    </div>
    <div class="main-r">
      <?php if ($this->_var['properties']): ?>
      <ul class="slidemenu">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pro');if (count($_from)):
    foreach ($_from AS $this->_var['pro']):
?>
        <li>
          <h3><em></em><?php echo htmlspecialchars($this->_var['pro']['name']); ?></h3>
          <div class="slidemenu-model">
            <p>
              <?php echo $this->_var['pro']['value']; ?>
            </p>
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <?php endif; ?>
      <script>
        jQuery(".slidemenu").slide({titCell:"h3",targetCell:".slidemenu-model",defaultIndex:1,effect:"slideDown",delayTime:300,trigger:"click",defaultPlay:false});
      </script>
    </div>
  </div>
</div>


<div class="pdetail-body w1140 clearfix">
  <?php echo $this->_var['goods']['goods_desc']; ?>
</div>

<div class="pdp-rec w1140 clearfix">
  <div class="tabs">
    <ul class="clearfix">
      <li class="tab tab-1 active">
        <h3 class="tab-head">
          <a href="javascript:void(0)">Skab et fuldendt look</a>
        </h3>
      </li>
      <li class="tab tab-2">
        <h3 class="tab-head">
          <a href="javascript:void(0)">Lignende modeller</a>
        </h3>
      </li>
      <li class="tab tab-3">
        <h3 class="tab-head">
          <a href="javascript:void(0)">Senest vist</a>
        </h3>
      </li>
    </ul>
  </div>
  <div class="tabs-con">
    <div class="slide-box1" id="tab_0">
      <div class="hd">
        <ul>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop7.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop8.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop9.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="bd">
        <a class="prev" href="javascript:void (0)"></a>
        <a class="next" href="javascript:void (0)"></a>
      </div>
    </div>
    <div class="slide-box1" id="tab_1">
      <div class="hd" id="tab-completelook">
        <ul>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop9.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="bd">
        <a class="prev" href="javascript:void (0)"></a>
        <a class="next" href="javascript:void (0)"></a>
      </div>
    </div>
    <div class="slide-box1" id="tab_2">
      <div class="hd" id="tab-completelook">
        <ul>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop8.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="pro-main">
              <div class="pic">
                <a href="#"><img src="themes/my/images/shop9.jpg"></a>
              </div>
              <div class="protitle">
                <p><a href="#">Dotia rulamsfrakke</a></p>
                <p>131.999 kr.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="bd">
        <a class="prev" href="javascript:void (0)"></a>
        <a class="next" href="javascript:void (0)"></a>
      </div>
    </div>

  <script type="text/javascript">
    $(function(){
      $('.tabs ul li').click(function(){
        var tabid=$(this).find('.tab-head').find('a').attr('href');
        $(this).addClass('active').siblings('li').removeClass('active');
        $(tabid).addClass('hd').siblings('.hd').removeClass('hd');
        var xushu = $(this).index();
        $('.slide-box1').hide();
        $('#tab_'+xushu).show();
      });
    });
    jQuery(".slide-box1").slide({titCell:".bd ul",mainCell:".hd ul",autoPage:true,effect:"leftLoop",autoPlay:false,vis:4});
  </script>
</div>
</div>




<script type="text/javascript">
  var goods_id = <?php echo $this->_var['goods_id']; ?>;
  var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
  var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
  <?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  var goodsId = <?php echo $this->_var['goods_id']; ?>;
  var now_time = <?php echo $this->_var['now_time']; ?>;

  
  onload = function(){
    changePrice();
    fixpng();
    try {onload_leftTime();}
    catch (e) {}
  }

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
 function changePrice()
 {
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
 function changePriceResponse(res)
 {
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>