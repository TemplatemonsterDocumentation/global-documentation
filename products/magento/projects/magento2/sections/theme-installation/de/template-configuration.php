<h3>Template configuration</h3>
<p>We are going to review template configuration options based on the example. We will configure it the same way as our Live Demo template, without affecting products data.</p>

<h4>Activate the new theme</h4>
<ol class="index-list">
	<li>Open Magento admin panel and navigate to <strong>Stores > Configuration</strong> menu.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-1.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the <strong>General</strong> menu select <strong>Design</strong> tab. Click <strong>Design Theme</strong> tab and in the <strong>Design Theme</strong> drop-down list select the required theme, then click <strong>Save Config</strong> button.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-2.jpg', true) ?>" alt="" /></figure>
	</li>	
</ol>

<h4>Reindex data</h4>
<ol class="index-list">
	<li>Open Magento admin panel and navigate to <strong>System > Index Management</strong> menu.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-3.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the first column open the drop-down list and choose the "<strong>Select All</strong>" option. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-4.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the top "<strong>Actions</strong>" selector choose "<strong>Update on save</strong>" option. It will allow automatically reindex the specified data after saving any settings in the admin panel.  
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-5.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>Click "<strong>Submit</strong>" button.</li>
	<li>Please be patient, this may take a while.</li>
</ol>

<h4>Disable cache</h4>
<p>In order to make the changes appear on your website with no delay, you need to disable cache. It prevents additional cache clearing actions after every change you make. You can enable it when you are done with store editing.</p>
<ol class="index-list">
	<li>Open Magento admin panel and navigate to <strong>System > Cache Management</strong> menu. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-6.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the first column open the drop-down list and choose the "<strong>Select All</strong>" option. 
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-7.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>In the top "<strong>Refresh</strong>" field select "<strong>Disable</strong>" option.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/Theme-set-8.jpg', true) ?>" alt="" /></figure>
	</li>
	<li>Click "<strong>Submit</strong>" button.</li>
</ol>