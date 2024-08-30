<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class IndexView extends AbstractView {

        /* ********************************************************
         * ********************************************************
         * ********************************************************/
        public function displayContent() {
			?>
                <h2>Repositiories</h2>
                <p><a href="https://github.com/ARTidas/Queue">https://github.com/ARTidas/Queue</a></p>

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