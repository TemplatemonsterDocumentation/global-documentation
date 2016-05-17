<?php
$sections = $this->getSectionObjects();
$articles = $this->getArticles();

foreach($sections as $key => $section):
    $sectionId = $this->_helper->formatId($section->getSectionId());
    $request = $this->_helper->buildQuery(['section'=>$section->getSectionId()]);
    ?>
    <li>
        <a href="<?php echo $request ?>" class="section_link"
           data-key="<?php echo $key; ?>"
           data-id="<?php echo $sectionId; ?>"><?php echo $section->getLabel(); ?></a>

        <?php for($i = 0; $i < count($articles[$key]); $i++):
            $article = $this->getArticleObject($articles[$key][$i], $section->getSectionId());
            $articleId = $this->_helper->formatId($article->getArticleId());
            ?>
            <ul>
                <li class="article">
                    <a href="<?php echo $request . '#' . $articleId; ?>"
                       class="article_link"
                       data-sectionId="<?php echo $key; ?>"
                       data-id="<?php echo $articleId; ?>"
                       data-section="<?php echo $sectionId; ?>"><?php echo $article->getLabel($i); ?></a>
                </li>
            </ul>
        <?php endfor; ?>
    </li>
<?php endforeach; ?>
