<h3>Configurar bloco estático</h3>
<p>Quando terminar de configurar as páginas, você vai precisar configurar os "static blocks" (blocos estáticos). O procedimento é parecido: você precisa copiar o código fonte e colar nos campos correspondentes do painel administrativo do Magento. Você vai precisar de uma tabela parecida, mas para blocos estáticos.</p>
<ol class="index-list"> 
	<li>Do menu superior, escolha <strong>CMS > Static Blocks</strong>.</li>
	<li>Clique em "Add New block" no canto direito para criar um novo bloco.<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/pages-setting-5.jpg') ?>" alt="" /></figure></li>
	<li>Escreva o nome e identificador do bloco. Você pode ver detalhes do bloco na tabela da página de demonstração do template (veja na parte de configurações da página).</li>
	<li>Abra o arquivo fonte do bloco e copie o HTML na área do conteúdo.</li>
</ol>
<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/pages-setting-6.jpg') ?>" alt="" /></figure>

<p class="alert alert-info"><span>Perceba que: alguns dos templates não tem blocos estáticos, então essa tabela pode estar vazia.</span></p>
<p class="alert alert-info"><span>Os arquivos fonte com os blocos estáticos estão em "<strong>sources\demo\static_blocks\</strong>".</span></p>

<h4>Como exibir nossos blocos com conteúdo estático?</h4>

<ol class="index-list"> 
	<li>Vá para <strong>CMS > Widgets</strong> no menu superior.</li>
	<li>Clique no botão <strong>Add New Widget Instance </strong>, localizado no topo direito para incluir o widget.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-1.jpg') ?>" alt="" /></figure>
	</li>
	<li>Escolha o tipo de widget <strong>CMS > Static Blocks</strong> e tema que deseja aplicar ao widget e clique no botão <strong>Continue</strong>.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-2.jpg') ?>" alt="" /></figure></li>
	<li>Na página seguinte, no campo <strong>Widget Instance Title </strong>, escreva o nome do widget que deseja exibir no painel administrativo. No campo <strong>Assign to Store Views </strong> você precisa escolher as telas da loja que vão mostrar o widget. No bloco <strong>Layout Updates </strong> clique no botão <strong>Add Layout Update</strong>. No campo <strong>Display On</strong> você pode escolher páginas onde o widget será exibido. Dependendo nas páginas escolhidas, você pode ter que preencher campos adicionais.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-3.jpg') ?>" alt="" /></figure>
	</li>
	<li>Escolha a aba <strong>Widget Options </strong> na barra esquerda e depois o bloco desejado. Não esqueça de gravar suas alterações.
		<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/widget-4.jpg') ?>" alt="" /></figure>
	</li>
</ol>

<p>Quando terminar de configurar as páginas e os blocos, sua loja está pronta para abrir.</p>