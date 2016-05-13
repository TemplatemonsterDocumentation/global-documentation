<article id="<?php echo $this->getArticleId(); ?>" class="article <?php /*echo $data->getSectionId();*/ ?>">
    <?php
        try{
            $this->loadArticleContent();
        } catch (Exception $e){
            echo $e;
        }
    ?>
</article>
