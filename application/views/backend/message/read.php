<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row">
	<div class="col-md-3">
		<a href="<?php echo site_url('backend/message/compose'); ?>" class="btn btn-primary btn-block margin-bottom">Compose</a>

		<div class="box box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">Folders</h3>
				<div class="box-tools">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>

			<div class="box-body no-padding">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo site_url('backend/message'); ?>"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">1</span></a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
					<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
					<li><a href="#"><i class="fa fa-filter"></i> Junk</a></li>
					<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Read message</h3>
				<div class="box-tools pull-right">
					<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
					<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>

			<div class="box-body no-padding">
				<div class="mailbox-read-info">
					<h3>Message Subject Is Placed Here</h3>
					<h5>From: help@example.com<span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
				</div>

				<div class="mailbox-controls with-border text-center">
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete"><i class="fa fa-trash-o"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply"><i class="fa fa-reply"></i></button>
						<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward"><i class="fa fa-share"></i></button>
					</div>
					<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
				</div>

				<div class="mailbox-read-message">
					<p>Hello John,</p>
					<p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</p>
					<p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</p>
					<p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American Apparel.</p>
					<p>Thanks,<br>domProjects Team</p>
				</div>
			</div>

			<div class="box-footer">
				<ul class="mailbox-attachments clearfix">
					<li>
						<span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
						<div class="mailbox-attachment-info">
							<a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
							<span class="mailbox-attachment-size">
								1,245 KB
								<a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
							</span>
						</div>
					</li>
					<li>
						<span class="mailbox-attachment-icon has-img"><img src="http://via.placeholder.com/1250x835" alt="Attachment"></span>
						<div class="mailbox-attachment-info">
							<a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
							<span class="mailbox-attachment-size">
								2.67 MB
								<a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
							</span>
						</div>
					</li>
				</ul>
			</div>

			<div class="box-footer">
				<div class="pull-right">
					<button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
					<button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
				</div>
				<button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
				<button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
			</div>
		</div>
	</div>
</div>