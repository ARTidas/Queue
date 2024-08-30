<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class TaskTypeCreateView extends ProjectAbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayContent() {
			?>
                <h1>Create <?php print(RequestHelper::$actor_name); ?></h1>

				<form method="post" action="">
                    <?php
                        foreach ((new TaskTypeDo)->getAttributes() as $key => $value) {
                            if (ActorHelper::isAttributeRequired($key)) {
                    ?>
                                <div>
                                    <label for="<?php print($key); ?>"><?php print(ucfirst($key)); ?>:</label>
                                    <input 
                                        type="text" 
                                        id="<?php print($key); ?>" 
                                        name="<?php print($key); ?>" 
                                        value="<?php print($value); ?>" />
                                </div>
                    <?php
                            }
                        }
                    ?>

                    <input type="submit" name="Create" />
                </form>
			<?php
		}

    }

?>