<?php

	/* ********************************************************
	 * ********************************************************
	 * ********************************************************/
	class TaskTypeDao {

		protected $database_connection_bo;

		/* ********************************************************
		 * *** Constructor ****************************************
		 * ********************************************************/
		public function __construct() {
			$this->database_connection_bo = new MariaDBDatabaseConnectionBo();
		}

		/* ********************************************************
		 * ********************************************************
		 * ********************************************************/
		public function create(array $parameters) {
			$query_string = "/* __CLASS__ __FUNCTION__ __FILE__ __LINE__ */
				INSERT INTO
					task_types
				SET
					name 				   	 = ?,
					is_active 				 = 1,
					created_at				 = NOW(),
					updated_at 				 = NOW()
			";

			try {
				$database_connection = ($this->database_connection_bo)->getConnection();

				$database_connection
					->prepare($query_string)
					->execute(
						(
							array_map(
								function($value) {
									return $value === '' ? NULL : $value;
								},
								$parameters
							)
						)
					)
				;

				return(
					$database_connection->lastInsertId()
				);
			}
			catch(Exception $exception) {
				LogHelper::addError('ERROR: ' . $exception->getMessage());

				return false;
			}
		}

		/* ********************************************************
		 * ********************************************************
		 * ********************************************************/
		public function getList() {
			$query_string = "/* __CLASS__ __FUNCTION__ __FILE__ __LINE__ */
				SELECT
                    MAIN.id AS id,
                    MAIN.name AS name,
                    MAIN.is_active AS is_active,
                    MAIN.created_at AS created_at,
                    MAIN.updated_at AS updated_at
				FROM
					task_types MAIN
				WHERE
					MAIN.is_active = 1
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
