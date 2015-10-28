<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>

<div class="content clearfix w1140">
    <div class="cont-mimg">
        <img src="themes/my/images/mimg1.jpg">
    </div>
    <div class="cont-l">
        <p class="type-p">SHOP</p>
        <ul>
            <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <li class="on">
                <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
                <?php if ($this->_var['cat']['cat_id']): ?>
                <ul class="sub-meau">
                    <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                    <li>
                        <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    <div class="cont-r">
        <p class="site-p">
            <span><?php echo $this->_var['category_name']; ?></span>
            <em></em>
        </p>
        <div class="shop">
            <ul>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <li>
                    <div class="lishop">
                        <div class="shopimg">
                            <a href="<?php echo $this->_var['goods']['url']; ?>" class="no-bcolor"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="243px" height="324px"></a>
                            <a href="<?php echo $this->_var['goods']['url']; ?>" class="yes-bcolor"><img src="<?php echo $this->_var['goods']['goods_img2']; ?>" width="243px" height="324px"></a>
                        </div>
                        <p><a href="#"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
                        <p><?php echo $this->_var['goods']['shop_price']; ?></p>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
