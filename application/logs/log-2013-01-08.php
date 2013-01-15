DEBUG - 2013-01-08 17:05:10 --> Config Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Hooks Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Utf8 Class Initialized
DEBUG - 2013-01-08 17:05:10 --> UTF-8 Support Enabled
DEBUG - 2013-01-08 17:05:10 --> URI Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Router Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Output Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Security Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Input Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-08 17:05:10 --> Language Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Loader Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Controller Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-08 17:05:10 --> Helper loaded: inflector_helper
DEBUG - 2013-01-08 17:05:10 --> Model Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Model Class Initialized
DEBUG - 2013-01-08 17:05:10 --> Database Driver Class Initialized
DEBUG - 2013-01-08 17:05:10 --> XSS Filtering completed
DEBUG - 2013-01-08 17:05:10 --> XSS Filtering completed
DEBUG - 2013-01-08 17:05:10 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes) 
							FROM GA_users as u 
						LEFT JOIN GA_job_db_summary as j
					ON u.user_id = j.user_id 
					   AND j.gp_date between '2002-10-02' AND '2012-12-12'
				WHERE 1 
				GROUP BY u.user_id 
				ORDER BY u.user_id
