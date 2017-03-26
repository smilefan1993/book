<!-- File: /app/View/Posts/index.ctp -->


<h1>Add new post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('user_name');
echo $this->Form->input('Email', array(
                        'label'=>'eMail',
                        'type'=>'email'));
echo $this->Form->input('Homepage');
echo $this->Form->input('user_text', array(
                        'label' => 'text',
                        'rows' => '5'));
echo $this->Form->end('Save Post');

    echo '<div class="btn btn-default">'.$this->Paginator->sort('created','created').'</div>';
    echo '<div class="btn btn-default">'.$this->Paginator->sort('user_name','name').'</div>';
    echo '<div class="btn btn-default">'.$this->Paginator->sort('Email','email').'</div>';


?>
    <div class="row">
    <?php foreach ($posts as $post): ?>

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <?php echo $post['Post']['user_name']; ?> </h3>
                </div>
                <div class="panel-body">
                    <?php echo $post['Post']['user_text']; ?>
                </div>
                 <div class="panel-footer clearfix">
                    <div class="pull-right">
                        <?php echo $post['Post']['created']; ?>
                    </div>
                    <div class="pull-left">
                        <?php echo $post['Post']['Email']; ?>
                    </div>
                 </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php unset($post); ?>
</div>
<?php echo $this->Paginator->numbers(array(
          'before' => '<ul class="pagination">',
          'separator' => '',
          'currentClass' => 'disabled',
          'tag' => 'li',
          'after' => '</ul>'
      ));

?>

