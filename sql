
-- テーブル作成
CREATE TABLE 'people' (
	'id'      INTEGER PRIMARY KEY AUTOINCREMENT,
    'name'    TEXT NOT NULL,
    'mail'    TEXT,
    'age'     INTEGER
);


INSERT INTO 'people' VALUES (1,'taro','taro@yamada.jp',35);
INSERT INTO 'people' VALUES (2,'hanako','hanako@flower.com',24);
INSERT INTO 'people' VALUES (3,'sachiko','sachiko@happy.org.jp',47);
INSERT INTO 'people' VALUES (4,'taro','taro@yamada.jp',35);
INSERT INTO 'people' VALUES (5,'hanako','hanako@flower.com',24);
INSERT INTO 'people' VALUES (6,'sachiko','sachiko@happy.org.jp',47);
CREATE TABLE 'boards' (
        "id" integer not null primary key autoincrement,
        "person_id" integer not null,
        "title" varchar not null,
        "message" varchar null null,
        "created_at" datetime null,
        "updated_at" datetime null
);
