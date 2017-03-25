<!-- File: /app/View/Posts/index.ctp -->


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