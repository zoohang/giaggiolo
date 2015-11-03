<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="content clearfix w1140">
    <div class="cont-mimg">
        <img src="themes/my/images/mimg1.jpg">
    </div>
    <div class="cont-l">
        <p class="type-p">about us</p>
        <ul>
            <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_47952500_1446540082');$this->_foreach['article_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list']['total'] > 0):
    foreach ($_from AS $this->_var['article_0_47952500_1446540082']):
        $this->_foreach['article_list']['iteration']++;
?> 
            <li <?php if ($this->_var['id'] == $this->_var['article_0_47952500_1446540082']['id']): ?> class="on" <?php endif; ?>><a href="<?php echo $this->_var['article_0_47952500_1446540082']['url']; ?>"><?php echo $this->_var['article_0_47952500_1446540082']['title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
              <?php if ($this->_var['cat']['id'] == $this->_var['cat_id']): ?>
              <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    <div class="cont-r details">
        <p class="news-titp"><?php echo $this->_var['article']['title']; ?></p>
        <div class="article_content"><?php echo $this->_var['article']['content']; ?></div>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>