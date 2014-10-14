<h1>Yii user accounts example</h1>
<p>
	You are currently signed in as:
	<?php echo Yii::app()->user->getName(); ?>
	<?php if(Yii::app()->user->isGuest == false): ?>
	<p><?php echo CHtml::link('Log out', array('site/logout')); ?> </p>
	<?php endif; ?>
</p>

<p><?php echo CHtml::link('Sign in page', array('site/login')); ?> </p>
<p><?php echo CHtml::link('Public page', array('site/public')); ?></p>
<p><?php echo CHtml::link('Protected page (admins only)', array('site/protected')); ?></p>


<script>
    $(document).ready(function(){
            "use strict";
            
            /*notyOK('vientos!!');
            notyError('vientos!!');
            notyInfo('vientos!!');*/
            //notyAlert('vientos!!',function(){console.log('ok click');},function(){console.log('cancel click');});
    });
</script>
