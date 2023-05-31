
Create table clientes (
    cliente_id serial primary key not null,
    cliente_nombre varchar (70) not null,
    cliente_nit varchar (20) not null,
    cliente_situacion smallint not null default 1
);