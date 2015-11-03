<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo $this->_var['page_title']; ?></title>
  <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
  <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="icon" href="animated_favicon.gif" type="image/gif" />
  <link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
  <!-- <link href="themes/my/style.css" rel="stylesheet" type="text/css" /> -->
  <link href="themes/my/css/gia.css" rel="stylesheet" type="text/css">
  <script src="themes/my/js/jquery1.42.min.js" type="text/javascript"></script>
  <script src="themes/my/js/jquery.json.js" type="text/javascript"></script>
  <script src="themes/my/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,user.js')); ?>
</head>
<body>
  
  <div class="header">
    <div class="inheader clearfix">
      <div class="header-top">
        <div class="w1140">
          <?php if ($this->_var['service_phone']): ?>
          <span>客服服务 {#service_phone}</span>
          <?php endif; ?>
          <a href="#"></a>
          <a href="#" style="background-position: -5px -34px"></a>
          <a href="#" style="background-position: -5px -68px"></a>
          <div id="divselect" class="lan">
            <cite><em class="en"></em>English</cite>
            <ul>
              <li><a href="?lang=en_us"><em class="en"></em>English</a></li>
              <li><a href="?lang=zh_cn"><em class="cn"></em>Chinese</a></li>
            </ul>
          </div>
          <input name="" type="hidden" value="" id="inputselect"/>
        </div>
      </div>
      <div class="header-nr w1140">
        <div class="logo fl">
          <a href="./"><img src="themes/my/images/logo.png"></a>
        </div>
        <div class="sea-nav fr">
          <form id="searchForm" class="search fr" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
            <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="search-txt" />
            <input name="imageField" type="submit" value=" " class="search-btn">
          </form>
          <p class="regorlogin fr">
            <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
            <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
          </p>
          <div class="clear"> </div>
          <a href="flow.php?act=cart" class="cart-a fr"><span>0</span></a>
          <div class="nav fr">
            <ul class="navul">
              <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>

              <?php if (($this->_foreach['nav_middle_list']['iteration'] - 1) == 0): ?>
              <li class="nLi">
                <a href="<?php echo $this->_var['nav']['url']; ?>" class="main_article" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                <?php if ($this->_var['lookbook']): ?>
                <div class="sub-nav">
                  <?php $_from = $this->_var['lookbook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
                  <dl class="noxt">
                    <dt><a href="<?php echo $this->_var['art']['url']; ?>"><?php echo $this->_var['art']['title']; ?></a></dt>
                  </dl>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php endif; ?>
              </li>

              <?php elseif (($this->_foreach['nav_middle_list']['iteration'] - 1) == 1): ?>

              <li class="nLi">
                <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                <div class="sub-nav">
                  <?php $_from = $this->_var['categories_shop']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cats');if (count($_from)):
    foreach ($_from AS $this->_var['cats']):
?>
                  <dl>
                    <dt><a href="<?php echo $this->_var['cats']['url']; ?>"><?php echo $this->_var['cats']['name']; ?></a></dt>
                    <?php $_from = $this->_var['cats']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                    <dd><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo $this->_var['cat']['name']; ?></a></dd>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </dl>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <dl>
                    <dt><a href="./article.php?id=16"><?php echo $this->_var['lang']['shipping']; ?></a></dt>
                  </dl>
                  <dl>
                    <dt><a href="./article.php?id=22"><?php echo $this->_var['lang']['After_sale']; ?></a></dt>
                  </dl>
                </div>
              </li>

              <?php elseif (($this->_foreach['nav_middle_list']['iteration'] - 1) == 2): ?>

              <li class="nLi">
                <a href="<?php echo $this->_var['nav']['url']; ?>" class="main_article" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                <?php if ($this->_var['glaggiolo_world']): ?>
                <div class="sub-nav">
                  <?php $_from = $this->_var['glaggiolo_world']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
                  <dl class="noxt">
                    <dt><a href="<?php echo $this->_var['art']['url']; ?>"><?php echo $this->_var['art']['title']; ?></a></dt>
                  </dl>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php endif; ?>

              </li>

              <?php elseif (($this->_foreach['nav_middle_list']['iteration'] - 1) == 3): ?>

              <li class="nLi">
                <a href="<?php echo $this->_var['nav']['url']; ?>" class="main_article" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                <?php if ($this->_var['aboutus']): ?>
                <div class="sub-nav">
                  <?php $_from = $this->_var['aboutus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
                  <dl class="noxt">
                    <dt><a href="<?php echo $this->_var['art']['url']; ?>"><?php echo $this->_var['art']['title']; ?></a></dt>
                  </dl>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php endif; ?>
              </li>

              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>

          </div>

        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    function checkSearchForm()
    {
      if(document.getElementById('keyword').value)
      {
        return true;
      }
      else
      {
        alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
        return false;
      }
    }

    jQuery(".navul").slide({type:"menu",titCell:".nLi",targetCell:".sub-nav",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

    $('.main_article').click(function () {
      var firstUrl = $(this).next('.sub-nav').children('.noxt:first').find('a').attr('href');
      window.location.href = firstUrl;
      //alert(first);
      return false;
    });
  </script>