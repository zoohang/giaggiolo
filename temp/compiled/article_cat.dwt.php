<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="content clearfix w1140">
    <div class="cont-mimg">
        <img src="themes/my/images/mimg1.jpg">
    </div>
    <div class="cont-l">
        <p class="type-p">about us</p>
        <ul>
            <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article_list']['iteration']++;
?> 
            <li><a href="<?php echo $this->_var['article']['url']; ?>"><?php echo $this->_var['article']['title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
              <?php if ($this->_var['cat']['id'] == $this->_var['cat_id']): ?>
              <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <li <?php if ($this->_var['cat_id'] == $this->_var['article']['id']): ?> class="on" <?php endif; ?>><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
    <div class="cont-r">
        <ul class="listnews">
        
            <li>
                <a href="#" class="news-img fl"><img src="themes/my/images/news1.jpg"></a>
                <div class="fl news-nr">
                    <a href="#" class="a-title">
                        Admin
                        <span style="font-size: 12px;padding: 0px 5px">12 July 2014 at 10.30am</span>
                        <span class="tspan">reply</span>
                    </a>
                    <p>
                        By Malene Birger is happy to announce the opening of the newly renovated flagship store located at Marylebone High Street, London.
                        “With an impeccable aesthetic eye and an extreme focus on details, Dimore Studio turned out to be the perfect match for By Malene Birger.
                    </p>
                </div>
            </li>

        </ul>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>