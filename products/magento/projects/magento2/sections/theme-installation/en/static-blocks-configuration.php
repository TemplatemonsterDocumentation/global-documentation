<h3>Static blocks configuration</h3>
<p>When you are done configuring the pages, you need to configure the static blocks. The procedure is similar: you need to copy the code from the source files and paste it to the corresponding fields in the Magento admin panel. You need to use a similar table but for the static blocks.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>In the top menu navigate to <strong>Content > Blocks</strong>. </li>
	<li>In the top right corner click the <strong>"Add New block"</strong> button to add a new static block. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/blocks-1.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>Specify the block name and identifier. You can get the block details from the table at the template configuration page (check the Pages Configuration part).</li>
	<li>Open the block source file and copy the HTML code into the content area.</li>
</ol>

<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/blocks-2.jpg', true) ?>" alt="" /></figure>

<p class="alert alert-info"><span>NOTE: some templates do not contain any static blocks, so the table can be empty. </span></p>
<p class="alert alert-info"><span>The source files with the static blocks code are stored in the "<strong>sources\demo\static_blocks\</strong>" folder of the template package. </span></p>

<h4>How to display our blocks with static content?</h4>

<ol class="index-list"> 
	<li>In the top menu navigate to <strong>Content > Widgets</strong></li>
	<li>In the top right corner click the <strong>"Add Widget"</strong> button to add a new widget.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-1.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>Specify the widget type <strong>CMS Static Block</strong> and theme that you want to apply the widget to, then click <strong>Continue</strong> button.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-2.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>On the next page in the <strong>Widget Title</strong> field enter the name of the widget which will be displayed in the admin panel. In the <strong>Assign to Store Views</strong> field you need to select store views which will display the widget. In the <strong>Layout Updates</strong> block clik <strong>Add Layout Update</strong> button. In the <strong>Display On</strong> field you can select pages where widget will be displayed on. Depending on selected pages you will have opportunity to fill in the additional fields. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-3.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the left sidebar click <strong>Widget Options</strong> tab and select the static block you are referring to. Don't forget to save changes. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-4.jpg', true) ?>" alt="" /></figure>
	</li>
</ol>
<p>When you are done configuring store pages and blocks, your store is ready to go.</p>