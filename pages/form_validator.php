<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('form_validator'); ?></li>
</ul>
<div class="separator bottom"></div>

<h3><?php echo $translate->_('form_validator'); ?></h3>

<div class="innerLR">
<form class="form-horizontal" style="margin-bottom: 0;" id="validateSubmitForm" method="get" autocomplete="off">
	
	<div class="widget">
		<div class="widget-head"><h4 class="heading">Validate a form with jQuery</h4></div>
		<div class="widget-body">
			<div class="row-fluid">
				<div class="span6">
					<div class="control-group">
						<label class="control-label" for="firstname"><?php echo $translate->_('first_name'); ?></label>
						<div class="controls"><input class="span12" id="firstname" name="firstname" type="text" /></div>
					</div>
					<div class="control-group">
						<label class="control-label" for="lastname"><?php echo $translate->_('last_name'); ?></label>
						<div class="controls"><input class="span12" id="lastname" name="lastname" type="text" /></div>
					</div>
					<div class="control-group">
						<label class="control-label" for="username"><?php echo $translate->_('username'); ?></label>
						<div class="controls"><input class="span12" id="username" name="username" type="text" /></div>
					</div>
				</div>
				<div class="span6">
					<div class="control-group">
						<label class="control-label" for="password"><?php echo $translate->_('password'); ?></label>
						<div class="controls"><input class="span12" id="password" name="password" type="password" /></div>
					</div>
					<div class="control-group">
						<label class="control-label" for="confirm_password"><?php echo $translate->_('confirm_password'); ?></label>
						<div class="controls"><input class="span12" id="confirm_password" name="confirm_password" type="password" /></div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">E-mail</label>
						<div class="controls"><input class="span12" id="email" name="email" type="email" /></div>
					</div>
				</div>
			</div>
			
			<hr class="separator" />
		
			<div class="row-fluid uniformjs">
				<div class="span4">
					<h4 style="margin-bottom: 10px;">Policy &amp; Newsletter</h4>
					<label class="checkbox" for="agree">
						<input type="checkbox" class="checkbox" id="agree" name="agree" />
						Please agree to our policy
					</label>
					<label class="checkbox" for="newsletter">
						<input type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
						Receive Newsletter
					</label>
				</div>
				<div class="span8">
					<div id="newsletter_topics">
						<h4>Topics</h4>
						<p>Select at least two topics you would like to receive in the newsletter.</p>
						<label for="topic_marketflash">
							<input type="checkbox" id="topic_marketflash" value="marketflash" name="topic" />
							Marketflash
						</label>
						<label for="topic_fuzz">
							<input type="checkbox" id="topic_fuzz" value="fuzz" name="topic" />
							Latest fuzz
						</label>
						<label for="topic_digester">
							<input type="checkbox" id="topic_digester" value="digester" name="topic" />
							Mailing list digester
						</label>
					</div>
				</div>
			</div>
		
			<hr class="separator" />
			
			<div class="form-actions">
				<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo $translate->_('save'); ?></button>
				<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i><?php echo $translate->_('cancel'); ?></button>
			</div>
		</div>
		
	</div>
	
</form>
</div>