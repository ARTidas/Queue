<?php

    /* ********************************************************
	 * ********************************************************
	 * ********************************************************/
    class TaskTypeBo extends AbstractBo {

        /* ********************************************************
		 * ********************************************************
		 * ********************************************************/
		public function create(AbstractDo $do) {
            $this->validateDo($do);

            if (!$this->isDoValid($do)) {
                return false;
            }

			return ($this->dao)->create(
				[
					$do->name
				]
			);
		}

    }

?>