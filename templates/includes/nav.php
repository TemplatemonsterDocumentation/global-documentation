<?php
$sections = $this->getSectionObjects();
$articles = $this->getArticles();

foreach($sections as $key => $section):
    $request = $this->_helper->buildQuery(['section' => $section->getSectionId()]);
    ?>
    <li>
        <a href="<?php echo $request ?>" class="section_link"
           data-key="<?php echo $key; ?>"
           data-id="<?php echo $section->getSectionId(); ?>"><?php echo $section->getLabel(); ?></a>
        <?php if(count($articles[$key]) > 0): ?>
        <ul>
        <?php for($i = 0; $i < count($articles[$key]); $i++):
            $article = $this->getArticleObject($articles[$key][$i], $section->getSectionId());
            ?>
            <li class="article">
                <a href="<?php echo $request . '#' . $article->getArticleId(); ?>"
                   class="article_link"
                   data-sectionId="<?php echo $key; ?>"
                   data-id="<?php echo $article->getArticleId(); ?>"
                   data-section="<?php echo $section->getSectionId(); ?>">
                    <?php echo $article->getLabel($article->getArticleId()); ?>
                </a>
            </li>
        <?php endfor; ?>
        </ul>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
