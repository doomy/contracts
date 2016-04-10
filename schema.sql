-- WARNING: do not run this if you have a working database
-- named contracts which you don't want to lose

DROP DATABASE IF EXISTS contracts;

CREATE DATABASE contracts;

USE contracts;

CREATE TABLE t_contract_type (
    id INT NOT NULL AUTO_INCREMENT,
    contract_type VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE t_contract_status (
    id INT NOT NULL AUTO_INCREMENT,
    contract_status VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE t_contract (
    id INT NOT NULL UNIQUE,
    contract_type_id INT NOT NULL,
    contract_status_id INT NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    contract_subject VARCHAR(255),
    contract_value INT NOT NULL DEFAULT 0,
    created_at DATE NOT NULL,
    active_from DATE NOT NULL,
    active_to DATE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(contract_type_id) 
        REFERENCES t_contract_type(id) 
        ON DELETE CASCADE,
    FOREIGN KEY(contract_status_id) 
        REFERENCES t_contract_status(id)
        ON DELETE CASCADE
);                 