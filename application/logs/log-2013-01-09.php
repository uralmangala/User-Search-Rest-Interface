DEBUG - 2013-01-09 15:07:49 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:49 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:49 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:49 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:49 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:49 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:49 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:49 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:49 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:49 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY w.ws_name asc  LIMIT 0,10
DEBUG - 2013-01-09 15:07:50 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:50 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:50 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:50 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:50 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:50 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:50 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:51 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:51 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:51 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:51 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY w.ws_name asc  LIMIT 0,10
DEBUG - 2013-01-09 15:07:56 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:56 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:56 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:56 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:56 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:56 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:56 --> If loop
DEBUG - 2013-01-09 15:07:56 --> QuerySELECT * 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:07:56 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:56 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:56 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:56 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:56 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:56 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:56 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:56 --> If loop
DEBUG - 2013-01-09 15:07:56 --> QuerySELECT * 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:07:57 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:57 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:57 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:57 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:57 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:57 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:57 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:57 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:57 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:57 --> If loop
DEBUG - 2013-01-09 15:07:57 --> QuerySELECT u.user_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:07:58 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:58 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:58 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:58 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:58 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:58 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:58 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:58 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:58 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:58 --> If loop
DEBUG - 2013-01-09 15:07:58 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes) 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:07:59 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:59 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:59 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Output Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Security Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Input Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:07:59 --> Language Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Loader Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Controller Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:07:59 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:07:59 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Model Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:07:59 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:59 --> XSS Filtering completed
DEBUG - 2013-01-09 15:07:59 --> If loop
DEBUG - 2013-01-09 15:07:59 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes) 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 AND user_name IN("user_7823")  
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:07:59 --> Config Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:07:59 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:07:59 --> URI Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Router Class Initialized
DEBUG - 2013-01-09 15:07:59 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:00 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:00 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:00 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:00 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:00 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:00 --> If loop
DEBUG - 2013-01-09 15:08:00 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes) 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				  
									  
									  
								      
							          WHERE 1 AND u.user_id IN("3","4")  
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:00 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:00 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:00 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:00 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:00 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:00 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:00 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:00 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:00 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:00 --> If loop
DEBUG - 2013-01-09 15:08:00 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  
								      
							          WHERE 1 AND u.user_id IN("3","4")  
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:01 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:01 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:01 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:01 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:01 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:01 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:01 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:01 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:01 --> If loop
DEBUG - 2013-01-09 15:08:01 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes) 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  
									  
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:01 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:01 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:01 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:01 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:01 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:01 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:01 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:01 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:01 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:01 --> If loop
DEBUG - 2013-01-09 15:08:01 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:02 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:02 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:02 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:02 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:02 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:02 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:02 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:02 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:02 --> If loop
DEBUG - 2013-01-09 15:08:02 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  
									  
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:02 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:02 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:02 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:02 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:02 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:02 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:02 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:02 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:02 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:02 --> If loop
DEBUG - 2013-01-09 15:08:02 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:03 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:03 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:03 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:03 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:03 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:03 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:03 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:03 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:03 --> If loop
DEBUG - 2013-01-09 15:08:03 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 AND app_name IN("3")  AND workstation_id IN("2")  AND j.printer_id IN("2")  
									  GROUP BY u.user_id ORDER BY u.user_id  
DEBUG - 2013-01-09 15:08:03 --> Config Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:08:03 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:08:03 --> URI Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Router Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Output Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Security Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Input Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:08:03 --> Language Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Loader Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Controller Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:08:03 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:08:03 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Model Class Initialized
DEBUG - 2013-01-09 15:08:03 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:08:03 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:03 --> XSS Filtering completed
DEBUG - 2013-01-09 15:08:03 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.printer_id  
DEBUG - 2013-01-09 15:09:13 --> Config Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:09:13 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:09:13 --> URI Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Router Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Output Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Security Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Input Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:09:13 --> Language Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Loader Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Controller Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:09:13 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:09:13 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:13 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:09:13 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:13 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:13 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.printer_id asc  LIMIT 0,1
DEBUG - 2013-01-09 15:09:21 --> Config Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:09:21 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:09:21 --> URI Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Router Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Output Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Security Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Input Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:09:21 --> Language Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Loader Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Controller Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:09:21 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:09:21 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:21 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:09:21 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:21 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:21 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.printer_id asc  LIMIT 1,1
DEBUG - 2013-01-09 15:09:28 --> Config Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:09:28 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:09:28 --> URI Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Router Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Output Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Security Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Input Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:09:28 --> Language Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Loader Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Controller Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:09:28 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:09:28 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Model Class Initialized
DEBUG - 2013-01-09 15:09:28 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:09:28 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:28 --> XSS Filtering completed
DEBUG - 2013-01-09 15:09:28 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.printer_id asc  LIMIT 1,10
DEBUG - 2013-01-09 15:19:39 --> Config Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:19:39 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:19:39 --> URI Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Router Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Output Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Security Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Input Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:19:39 --> Language Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Loader Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Controller Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:19:39 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:19:39 --> Model Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Model Class Initialized
DEBUG - 2013-01-09 15:19:39 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:19:39 --> XSS Filtering completed
DEBUG - 2013-01-09 15:19:39 --> XSS Filtering completed
DEBUG - 2013-01-09 15:19:39 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.printer_id asc  LIMIT 0,1
DEBUG - 2013-01-09 15:21:55 --> Config Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:21:55 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:21:55 --> URI Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Router Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Output Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Security Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Input Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:21:55 --> Language Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Loader Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Controller Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:21:55 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:21:55 --> Model Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Model Class Initialized
DEBUG - 2013-01-09 15:21:55 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:21:55 --> XSS Filtering completed
DEBUG - 2013-01-09 15:21:55 --> XSS Filtering completed
DEBUG - 2013-01-09 15:21:55 --> DB Transaction Failure
ERROR - 2013-01-09 15:21:55 --> Query error: Unknown column 'j.user_name' in 'order clause'
DEBUG - 2013-01-09 15:21:55 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-01-09 15:22:07 --> Config Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:22:07 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:22:07 --> URI Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Router Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Output Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Security Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Input Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:22:07 --> Language Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Loader Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Controller Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:22:07 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:22:07 --> Model Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Model Class Initialized
DEBUG - 2013-01-09 15:22:07 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:22:07 --> XSS Filtering completed
DEBUG - 2013-01-09 15:22:07 --> XSS Filtering completed
DEBUG - 2013-01-09 15:22:07 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.user_id asc  LIMIT 1,10
DEBUG - 2013-01-09 15:22:19 --> Config Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Hooks Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Utf8 Class Initialized
DEBUG - 2013-01-09 15:22:19 --> UTF-8 Support Enabled
DEBUG - 2013-01-09 15:22:19 --> URI Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Router Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Output Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Security Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Input Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-01-09 15:22:19 --> Language Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Loader Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Controller Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Config file loaded: application/config/rest.php
DEBUG - 2013-01-09 15:22:19 --> Helper loaded: inflector_helper
DEBUG - 2013-01-09 15:22:19 --> Model Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Model Class Initialized
DEBUG - 2013-01-09 15:22:19 --> Database Driver Class Initialized
DEBUG - 2013-01-09 15:22:19 --> XSS Filtering completed
DEBUG - 2013-01-09 15:22:19 --> XSS Filtering completed
DEBUG - 2013-01-09 15:22:19 --> QuerySELECT u.user_name,u.user_id,sum(j.printed_pages),max(j.datetimes),GROUP_CONCAT(DISTINCT CAST(j.app_name AS CHAR(7))) as app_name,a.ap_name,GROUP_CONCAT(DISTINCT CAST(j.workstation_id AS CHAR(7))) as workstation_id,
									w.ws_name,GROUP_CONCAT(DISTINCT CAST(j.printer_id AS CHAR(7))) as printer_id,
									p.printer_name 
									  FROM GA_users as u 
									  LEFT JOIN GA_job_db_summary as j
								      ON u.user_id = j.user_id 
					  				   AND j.gp_date between '2002-10-02' AND '2012-12-12'
									  LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id
									  LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id
								      LEFT JOIN GA_application as a ON a.ap_id=j.app_name
							          WHERE 1 
									  GROUP BY u.user_id ORDER BY j.user_id asc  LIMIT 1,10
