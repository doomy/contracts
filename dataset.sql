INSERT INTO t_contract_type (contract_type) VALUES
    ('AÜG'), ('FL'), ('FMA'), ('local'), ('WV');
    
INSERT INTO t_contract_status (contract_status) VALUES
    ('new'), ('internal'), ('sent'), ('signed'), ('storno');

-- testing contracts:    
INSERT INTO t_contract 
    (contract_type_id, contract_status_id, company_name, contract_subject, contract_value, created_at, active_from, active_to)
VALUES 
    (3, 3, 'Edikt', 'extended cooperation', 45000, '2016-04-11', '2016-05-01', '2016-12-31'),
    (1, 2, 'Sony', 'random lease', 160000, '2016-04-11', '2016-05-01', '2016-05-02'); 
    