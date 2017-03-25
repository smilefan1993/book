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
?>

    <!-- Here is where we loop through our $posts array, printing out post info -->
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
            </div>
        </div>
    <?php endforeach; ?>
    <?php unset($post); ?>
    </div>