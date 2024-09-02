<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class TaskExecutionDao extends AbstractDao {

		/* ********************************************************
		 * ********************************************************
		 * ********************************************************/
		public function getList() {
			$query_string = "/* __CLASS__ __FUNCTION__ __FILE__ __LINE__ */
				SELECT
                    MAIN.id 		        AS id,
                    MAIN.task_id            AS task_id,
                    MAIN.result             AS result,
                    MAIN.is_active 	        AS is_active,
                    MAIN.created_at         AS created_at,
                    MAIN.updated_at         AS updated_at
				FROM
					queue.task_executions MAIN
				WHERE
					MAIN.is_active = 1
                ORDER BY
                    MAIN.created_at DESC
			";

			try {
				$handler = ($this->database_connection_bo)->getConnection();
				$statement = $handler->prepare($query_string);
				$statement->execute();
				
				return $statement->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $exception) {
				LogHelper::addError('Error: ' . $exception->getMessage());

				return false;
			}
		}
		
	}
?>
