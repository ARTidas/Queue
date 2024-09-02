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
                    <li>Actors
                        <ol>
                            <li>Creation - Warn if name is not unique</li>
                            <li>Delete / Activate</li>
                        </ol>
                    </li>
                    
                    <li>AJAX refresh for task exection list</li>
                    <li>Automatic menu</li>
                    <li>Create documentation</li>
                </ol>
			<?php
		}

    }

?>