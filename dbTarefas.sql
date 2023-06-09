PGDMP         '                {         	   listaToDo    15.2    15.2                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16398 	   listaToDo    DATABASE     �   CREATE DATABASE "listaToDo" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE "listaToDo";
                postgres    false                       0    0    DATABASE "listaToDo"    COMMENT     W   COMMENT ON DATABASE "listaToDo" IS 'banco de dados para aplicação todo com laravel';
                   postgres    false    3348                       0    0    DATABASE "listaToDo"    ACL     �   REVOKE ALL ON DATABASE "listaToDo" FROM postgres;
GRANT CREATE,CONNECT ON DATABASE "listaToDo" TO postgres;
GRANT TEMPORARY ON DATABASE "listaToDo" TO postgres WITH GRANT OPTION;
                   postgres    false    3348            �            1259    16478 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16477    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    215                       0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    214            �            1259    16485    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16484    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    217                       0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    216            �            1259    16519    tarefas    TABLE     �   CREATE TABLE public.tarefas (
    id bigint NOT NULL,
    tarefa character varying(255) NOT NULL,
    is_complete integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.tarefas;
       public         heap    postgres    false            �            1259    16518    tarefas_id_seq    SEQUENCE     w   CREATE SEQUENCE public.tarefas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.tarefas_id_seq;
       public          postgres    false    219                       0    0    tarefas_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.tarefas_id_seq OWNED BY public.tarefas.id;
          public          postgres    false    218            o           2604    16481    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            p           2604    16488    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            q           2604    16522 
   tarefas id    DEFAULT     h   ALTER TABLE ONLY public.tarefas ALTER COLUMN id SET DEFAULT nextval('public.tarefas_id_seq'::regclass);
 9   ALTER TABLE public.tarefas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218    219            
          0    16478 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    215   �!                 0    16485    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    217   D"                 0    16519    tarefas 
   TABLE DATA           R   COPY public.tarefas (id, tarefa, is_complete, created_at, updated_at) FROM stdin;
    public          postgres    false    219   a"                  0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 5, true);
          public          postgres    false    214                       0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    216                       0    0    tarefas_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.tarefas_id_seq', 4, true);
          public          postgres    false    218            s           2606    16483    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    215            u           2606    16492 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    217            w           2606    16495 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    217            z           2606    16524    tarefas tarefas_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.tarefas
    ADD CONSTRAINT tarefas_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.tarefas DROP CONSTRAINT tarefas_pkey;
       public            postgres    false    219            x           1259    16493 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    217    217            
   }   x�]��
�0E����&m���b�`�n���1�thnι\q$�,�}(������oZEK��e�m��^- �7)I̒�'OL�f]��e���a�����C���A����O�����f�] �jM8�            x������ � �         v   x�3����-H,RH��-(-IL�/�4�4202�50�50T00�22�20�&�e��XԜ���XT�ω������S��9�!!�@�E�%�	gHQ>P�BnjQ2Ƚ���\lb�M�+F��� ��7?     