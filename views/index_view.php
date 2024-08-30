<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class IndexView extends ProjectAbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayContent() {
			?>
				<h2>TODO</h2>
                <ol>
                    <li>Task types
                        <ol>
                            <li>Create</li>
                            <li>Modify</li>
                        </ol>
                    </li>
                    <li>Tasks
                        <ol>
                            <li>List</li>
                            <li>Create</li>
                            <li>Modify</li>
                        </ol>
                    </li>
                    <li>Automatic menu</li>
                    <li>Create documentation</li>
                </ol>

                <h2>DONE</h2>
                <ol>
                    <li>Task types
                        <ol>
                            <li>List</li>
                        </ol>
                    </li>
                </ol>
			<?php
		}

    }

?>