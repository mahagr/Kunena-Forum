<?php
/**
 * Kunena Component
 * @package Kunena.Template.Crypsis
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$isReply = $this->message->id != $this->topic->first_post_id;
?>

<div class="chat">
  <div class="bubble me span12">
    <div style="border-bottom:1px solid #e5e5e5;">
      <h5> <?php echo $this->profile->getLink() ?> <small>
        <?php if (!$isReply) {
					echo 'Created a new topic.';
				} else {
					echo 'Replied the topic.';
				}
				?>
        </small> <small><span class="pull-right" title="<?php echo KunenaDate::getInstance($this->message->time)->toKunena('config_post_dateformat_hover') ?>"><?php echo KunenaDate::getInstance($this->message->time)->toKunena('config_post_dateformat') ?> <?php echo $this->numLink ?> </span></small> </h5>
	  <?php if ($this->message->subject) : ?>
      <h4><?php echo ($isReply ? JText::_('COM_KUNENA_RE').' ' : '') . $this->message->displayField('subject') ?></h4>
	  <?php endif; ?>
    </div>
    <p class="kmsg"> <?php echo KunenaHtmlParser::parseBBCode ($this->message->message, $this->view) ?></p>
    <h5>
      <?php if ($this->signatureHtml) : ?>
      <span class="pull-left"><small> <?php echo $this->signatureHtml ?></small> </span>
      <?php endif ?>
      <?php if (!empty($this->reportMessageLink)) :?>
      <span class="pull-right"><small><?php echo $this->reportMessageLink ?></small>
      <?php if (!empty($this->ipLink)) : ?>
      <br />
      <small><?php echo $this->ipLink ?></small>
      <?php endif ?>
      </span>
      <div class="clearfix"></div>
      <?php endif ?>
    </h5>
  </div>
</div>
<?php if (!empty($this->attachments)) : ?>
<div class="span12"> <?php echo JText::_('COM_KUNENA_ATTACHMENTS');?>
  <ul>
    <?php foreach($this->attachments as $attachment) : ?>
    <li style="list-style:none; margin-bottom:5px;"> <span> <?php echo $attachment->getThumbnailLink(); ?> </span> <span> <?php echo $attachment->getTextLink(); ?> </span> </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>
