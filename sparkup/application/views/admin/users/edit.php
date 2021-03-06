<h2 class="page-header">Edit User</h2>

<?php
echo validation_errors('<p class="alert alert-dismissable alert-danger">');
echo form_open('admin/users/edit/'.$item->id); ?>

    <!-- First Name -->
    <div class="form-group">
    <?php
        echo form_label('First Name', 'first_name');

        $data = array(
            'name'      => 'first_name',
            'id'        => 'first_name',
            'maxlength' => '50',
            'class'     => 'form-control',
            'value'     => $item->first_name
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Last Name -->
    <div class="form-group">
    <?php
        echo form_label('Last Name', 'last_name');

        $data = array(
            'name'      => 'last_name',
            'id'        => 'last_name',
            'maxlength' => '50',
            'class'     => 'form-control',
            'value'     => $item->last_name
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Username -->
    <div class="form-group">
    <?php
        echo form_label('Username', 'username');

        $data = array(
            'name'      => 'username',
            'id'        => 'username',
            'maxlength' => '20',
            'class'     => 'form-control',
            'value'     => $item->username
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Email -->
    <div class="form-group">
    <?php
        echo form_label('Email', 'email');

        $data = array(
            'name'      => 'email',
            'id'        => 'email',
            'maxlength' => '150',
            'class'     => 'form-control',
            'value'     => $item->email
        );

        echo form_input($data);
    ?>
    </div>


<?php
    echo form_submit('mysubmit', 'Update User', array('class' => 'btn btn-primary'));

echo form_close(); ?>
