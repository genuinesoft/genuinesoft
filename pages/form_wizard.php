<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Form Wizard'); ?></li>
</ul>
<div class="separator bottom"></div>

<h3><?php echo $translate->_('Form Wizard'); ?></h3>
<div class="innerLR">
	<div id="rootwizard" class="wizard">
		<div class="wizard-head">
			<ul>
				<li><a href="#tab1" data-toggle="tab">First</a></li>
				<li><a href="#tab2" data-toggle="tab">Second</a></li>
				<li><a href="#tab3" data-toggle="tab">Third</a></li>
				<li><a href="#tab4" data-toggle="tab">Fourth</a></li>
				<li><a href="#tab5" data-toggle="tab">Fifth</a></li>
				<li><a href="#tab6" data-toggle="tab">Sixth</a></li>
				<li><a href="#tab7" data-toggle="tab">Seventh</a></li>
			</ul>
		</div>
		<div class="widget">
			<div class="widget-head progress progress-primary" id="bar">
				<div class="bar">Step <strong class="step-current">1</strong> of <strong class="steps-total">3</strong> - <strong class="steps-percent">100%</strong></div>
			</div>
			<div class="widget-body">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<div class="row-fluid">
							<div class="span3">
								<strong><?php echo $translate->_('product_title'); ?></strong>
								<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="span9">
								<label for="inputTitle"><?php echo $translate->_('title'); ?></label>
								<input type="text" id="inputTitle" class="span6" value="" placeholder="Enter product title ..." />
								<div class="separator"></div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2">
						<div class="row-fluid">
							<div class="span3">
								<strong><?php echo $translate->_('description'); ?></strong>
								<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="span9">
								<label for="textDescription"><?php echo $translate->_('description'); ?></label>
								<textarea id="textDescription" class="wysihtml5" style="width: 96%;" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab3">
						<h4>Third tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab4">
						<h4>Fourth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab5">
						<h4>Fifth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab6">
						<h4>Sixth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab7">
						<h4>Seventh tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
				</div>
				<div class="pagination margin-bottom-none">
					<ul>
						<li class="primary previous first"><a href="javascript:;">First</a></li>
						<li class="primary previous"><a href="javascript:;">Previous</a></li>
						<li class="last primary"><a href="javascript:;">Last</a></li>
					  	<li class="next primary"><a href="javascript:;">Next</a></li>
						<li class="next finish primary" style="display:none;"><a href="javascript:;">Finish</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wizard">
		<div class="widget widget-tabs">
			<div class="widget-head">
				<ul>
					<li class="active"><a href="#tab1-1" class="glyphicons home" data-toggle="tab"><i></i>First</a></li>
					<li><a href="#tab2-1" class="glyphicons umbrella" data-toggle="tab"><i></i>Second</a></li>
					<li><a href="#tab3-1" class="glyphicons fishes" data-toggle="tab"><i></i>Third</a></li>
					<li><a href="#tab4-1" class="glyphicons car" data-toggle="tab"><i></i>Fourth</a></li>
					<li><a href="#tab5-1" class="glyphicons leaf" data-toggle="tab"><i></i>Fifth</a></li>
					<li><a href="#tab6-1" class="glyphicons cup" data-toggle="tab"><i></i>Sixth</a></li>
					<li><a href="#tab7-1" class="glyphicons tie" data-toggle="tab"><i></i>Seventh</a></li>
				</ul>
			</div>
			<div class="widget-body">
				<div class="tab-content">
					<div class="tab-pane active" id="tab1-1">
						<div class="row-fluid">
							<div class="span3">
								<strong><?php echo $translate->_('product_title'); ?></strong>
								<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="span9">
								<label for="inputTitle"><?php echo $translate->_('title'); ?></label>
								<input type="text" id="inputTitle" class="span6" value="" placeholder="Enter product title ..." />
								<div class="separator"></div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2-1">
						<div class="row-fluid">
							<div class="span3">
								<strong><?php echo $translate->_('description'); ?></strong>
								<p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="span9">
								<label for="textDescription"><?php echo $translate->_('description'); ?></label>
								<textarea id="textDescription" class="wysihtml5" style="width: 96%;" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab3-1">
						<h4>Third tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab4-1">
						<h4>Fourth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab5-1">
						<h4>Fifth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab6-1">
						<h4>Sixth tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
					<div class="tab-pane" id="tab7-1">
						<h4>Seventh tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices libero vel massa egestas facilisis. Mauris convallis augue nec dolor dignissim vestibulum. Praesent imperdiet elit posuere arcu posuere consectetur. Morbi dignissim eleifend nibh, eget tincidunt nibh dignissim hendrerit. Cras iaculis congue lorem, eget gravida augue vehicula sed. Nam lorem sem, consectetur ac tempus quis, consectetur ut lectus. In bibendum luctus pharetra. Morbi lacinia sem sem. Phasellus quis tellus magna.</p>
					</div>
				</div>
				<div class="pagination margin-bottom-none">
					<ul>
						<li class="primary previous first"><a href="javascript:;">First</a></li>
						<li class="primary previous"><a href="javascript:;">Previous</a></li>
						<li class="last primary"><a href="javascript:;">Last</a></li>
					  	<li class="next primary"><a href="javascript:;">Next</a></li>
						<li class="next finish primary" style="display:none;"><a href="javascript:;">Finish</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>