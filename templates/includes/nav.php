<?php
$sections = $this->getSectionObjects();
$articles = $this->getArticles();

foreach($sections as $key => $section): ?>
    <li>
        <a href="#<?php echo $this->_helper->formatId($section->getSectionId()); ?>" class="section_link"
           data-key="<?php echo $key; ?>"
           data-id="<?php echo $section->getSectionId(); ?>"><?php echo $section->getLabel(); ?></a>

        <?php for($i = 0; $i < count($articles[$key]); $i++):  ?>
            <ul>
                <?php $article = $this->getArticleObject($articles[$key][$i], $section->getSectionId()); ?>
                <li class="article article__<?php echo $this->_helper->formatId($article->getArticleId()); ?>">
                    <a href="#<?php echo $this->_helper->formatId($article->getArticleId()); ?>" class="article_link"
                       data-sectionId="<?php echo $key; ?>"
                       data-id="<?php echo $this->_helper->formatId($article->getArticleId()); ?>"
                       data-section="<?php echo $this->_helper->formatId($section->getSectionId()); ?>"><?php echo
                        $article->getLabel($i); ?></a>
                </li>
            </ul>
        <?php endfor; ?>
    </li>
<?php endforeach; ?>
