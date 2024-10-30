<x-slides.title-and-body title="Why NoSQL?">
  <div class="flex flex-col w-full gap-10 text-3xl p-10 justify-start grow h-max">
    <p class="font-bold" x-show="$wire.slide >= 1" x-transition>The year was 2009...</p>
    <p x-show="$wire.slide >= 2 && $wire.slide <= 3" x-transition>Relational databases reigned supreme...</p>
    <div class="flex justify-around items-center gap-5" x-show="$wire.slide >= 2 && $wire.slide <= 3">
      <x-image src="resources/img/mysql.png" alt="MySQL logo" transition :duration="1000" :delay="300" class="h-32" x-show="$wire.slide >= 2" />
      <x-image src="resources/img/postgres.png" alt="PostgreSQL logo" transition :duration="1000" :delay="600" class="h-32" x-show="$wire.slide >= 2"/>
      <x-image src="resources/img/sqlite.png" alt="SQLite logo" transition :duration="1000" :delay="900" class="h-32" x-show="$wire.slide >= 2"/>
      <x-image src="resources/img/mssql.svg" alt="Microsoft Sql Server logo" transition :duration="1000" :delay="1200" class="h-32" x-show="$wire.slide >= 2"/>
      <x-image src="resources/img/oracle.png" alt="Oracle logo" transition :duration="1000" :delay="1500" class="h-32" x-show="$wire.slide >= 2"/>
    </div>
    <p x-show="$wire.slide === 3" x-transition>Developers had their code intermittently shouting at them...</p>
    <div wire:ignore x-transition x-show="$wire.slide === 3" class="grid grid-cols-2 gap-10 items-center w-full">
      <x-markdown>```sql
UPDATE `slides`
  SET `order` = (`order`-1)
WHERE  `resourceid`= 123
  AND `order` > 10
  AND `order` <= 18
ORDER BY `order` ASC;
```</x-markdown>
      <x-markdown>```sql
SELECT `Questions`.`id`, `Questions`.`title`,
    COUNT(`value`) AS `numAttempts`,
    SUM(`value`) AS `numCorrect`,
    ROUND(SUM(`value`) / COUNT(`value`) * 100) AS `percent`
FROM `ExamQuestions`
    INNER JOIN `Options` ON `ExamQuestions`.`optionId` = `Options`.`id`
    INNER JOIN `Questions` ON `Options`.`questionid` = `Questions`.`id`
    INNER JOIN `Exams` ON `Exams`.`id` = `ExamQuestions`.`examId`
WHERE `Exams`.`attempt` = 1
GROUP BY `Questions`.`id`
HAVING `percent` NOT BETWEEN 0 AND 50
ORDER BY `numAttempts` DESC;
```</x-markdown>
    </div>
    <p x-show="$wire.slide === 4" x-transition>Traditional tables were too restrictive for the hot new startups...</p>
    <div wire:ignore x-transition x-show="$wire.slide === 4" class="grid grid-cols-2 gap-10 items-center w-full">
      <x-markdown>```sql
CREATE TABLE `users` (
  `id` int(100) NOT NULL PRIMARY AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `s0` tinyint(1) NOT NULL DEFAULT 0,
  `s1_1` tinyint(1) NOT NULL DEFAULT 0,
  `s1_2` tinyint(1) NOT NULL DEFAULT 0,
  `s1_3` tinyint(1) NOT NULL DEFAULT 0,
  `s1_4` tinyint(1) NOT NULL DEFAULT 0,
  `s1_5` tinyint(1) NOT NULL DEFAULT 0,
  `s1_6` tinyint(1) NOT NULL DEFAULT 0,
  `s1_7` tinyint(1) NOT NULL DEFAULT 0,
  `s1_8` tinyint(1) NOT NULL DEFAULT 0,
  `s1_9` tinyint(1) NOT NULL DEFAULT 0,
  `s1_10` tinyint(1) NOT NULL DEFAULT 0,
  `s1_11` tinyint(1) NOT NULL DEFAULT 0,
  `s1_12` tinyint(1) NOT NULL DEFAULT 0,
  `s1_13` tinyint(1) NOT NULL DEFAULT 0,
  `s1_14` tinyint(1) NOT NULL DEFAULT 0,
  `s1_15` tinyint(1) NOT NULL DEFAULT 0,
  `s1_16` tinyint(1) NOT NULL DEFAULT 0,
  `s1_17` tinyint(1) NOT NULL DEFAULT 1,
  `s1_18` tinyint(1) NOT NULL DEFAULT 0,
  `s1_19` tinyint(1) NOT NULL DEFAULT 0,
  `s1_20` tinyint(1) NOT NULL DEFAULT 0,
  `s1_21` tinyint(1) NOT NULL DEFAULT 0,
  `s1_22` tinyint(1) NOT NULL DEFAULT 0,
  `s1_23` tinyint(1) NOT NULL DEFAULT 0,
  `s1_24` tinyint(1) NOT NULL DEFAULT 0,
  `s1_25` tinyint(1) NOT NULL DEFAULT 0,
  `s1_26` tinyint(1) NOT NULL DEFAULT 0,
  `s1_27` tinyint(1) NOT NULL DEFAULT 0,
  `s1_28` tinyint(1) NOT NULL DEFAULT 0,
  `s1_29` tinyint(1) NOT NULL DEFAULT 0,
  `s1_30` tinyint(1) NOT NULL DEFAULT 0,
  `s1_31` tinyint(1) NOT NULL DEFAULT 0,
  `s1_32` tinyint(1) NOT NULL DEFAULT 0,
  `s1_33` tinyint(1) NOT NULL DEFAULT 0,
  `s1_34` tinyint(1) NOT NULL DEFAULT 0,
  `s1_35` tinyint(1) NOT NULL DEFAULT 0,
  `s1_36` tinyint(1) NOT NULL DEFAULT 0,
  `s1_37` tinyint(1) NOT NULL DEFAULT 0,
  `s2` tinyint(1) NOT NULL DEFAULT 1,
  `s3` tinyint(1) NOT NULL DEFAULT 1,
  `s4` tinyint(1) NOT NULL DEFAULT 0,
  `s5` tinyint(1) NOT NULL DEFAULT 0,
  `s6` tinyint(1) NOT NULL DEFAULT 0,
  `s7` tinyint(1) NOT NULL DEFAULT 0,
  `s8` tinyint(1) NOT NULL DEFAULT 0,
  `s9` tinyint(1) NOT NULL DEFAULT 0,
  `s10` tinyint(1) NOT NULL DEFAULT 0,
  `s11` tinyint(1) NOT NULL DEFAULT 0,
  `s12` tinyint(1) NOT NULL DEFAULT 0,
  `s13` tinyint(1) NOT NULL DEFAULT 0,
  `s14` tinyint(1) NOT NULL DEFAULT 0,
  `s15` tinyint(1) NOT NULL DEFAULT 0,
  `s16` tinyint(1) NOT NULL DEFAULT 0,
  `s17` tinyint(1) NOT NULL DEFAULT 0,
  `s18` tinyint(1) NOT NULL DEFAULT 0,
  `s19` tinyint(1) NOT NULL DEFAULT 0,
  `s20` tinyint(1) NOT NULL DEFAULT 0,
  `s21` tinyint(1) NOT NULL DEFAULT 0,
```</x-markdown>
      <x-markdown>```sql
  `s22` tinyint(1) NOT NULL DEFAULT 0,
  `s22_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Other',
  `s23` tinyint(1) NOT NULL DEFAULT 0,
  `s24` tinyint(1) NOT NULL DEFAULT 0,
  `s25` tinyint(1) NOT NULL DEFAULT 0,
  `s26` tinyint(1) NOT NULL DEFAULT 0,
  `s27` tinyint(1) NOT NULL DEFAULT 0,
  `s28` tinyint(1) NOT NULL DEFAULT 0,
  `s29` tinyint(1) NOT NULL DEFAULT 0,
  `s30` tinyint(1) NOT NULL DEFAULT 0,
  `s31` tinyint(1) NOT NULL DEFAULT 0,
  `s32` tinyint(1) NOT NULL DEFAULT 0,
  `s33` tinyint(1) NOT NULL DEFAULT 0,
  `s34` tinyint(1) NOT NULL DEFAULT 0,
  `s35` tinyint(1) NOT NULL DEFAULT 0,
  `s36` tinyint(1) NOT NULL DEFAULT 0,
  `s37` tinyint(1) NOT NULL DEFAULT 0,
  `s38` tinyint(1) NOT NULL DEFAULT 0,
  `s39` tinyint(1) NOT NULL DEFAULT 0,
  `s40` tinyint(1) NOT NULL DEFAULT 0,
  `s41` tinyint(1) NOT NULL DEFAULT 0,
  `s42` tinyint(1) NOT NULL DEFAULT 0,
  `s43` tinyint(1) NOT NULL DEFAULT 0,
  `s44` tinyint(1) NOT NULL DEFAULT 0,
  `s45` tinyint(1) NOT NULL DEFAULT 0,
  `a0` tinyint(1) NOT NULL DEFAULT 1,
  `a1` tinyint(1) NOT NULL DEFAULT 1,
  `a2` tinyint(1) NOT NULL DEFAULT 1,
  `a3` tinyint(1) NOT NULL DEFAULT 0,
  `a4` tinyint(1) NOT NULL DEFAULT 0,
  `a5` tinyint(1) NOT NULL DEFAULT 0,
  `a6` tinyint(1) NOT NULL DEFAULT 0,
  `a7` tinyint(1) NOT NULL DEFAULT 0,
  `a8` tinyint(1) NOT NULL DEFAULT 0,
  `a9` tinyint(1) NOT NULL DEFAULT 0,
  `a10` tinyint(1) NOT NULL DEFAULT 0,
  `a11` tinyint(1) NOT NULL DEFAULT 0,
  `a12` tinyint(1) NOT NULL DEFAULT 0,
  `a13` tinyint(1) NOT NULL DEFAULT 0,
  `a14` tinyint(1) NOT NULL DEFAULT 0,
  `a15` tinyint(1) NOT NULL DEFAULT 0,
  `a16` tinyint(1) NOT NULL DEFAULT 0,
  `a17` tinyint(1) NOT NULL DEFAULT 0,
  `a18` tinyint(1) NOT NULL DEFAULT 0,
  `a19` tinyint(1) NOT NULL DEFAULT 0,
  `a20` tinyint(1) NOT NULL DEFAULT 0,
  `a21` tinyint(1) NOT NULL DEFAULT 0,
  `a21_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Other',
  `a22` tinyint(1) NOT NULL DEFAULT 0,
  `a23` tinyint(1) NOT NULL DEFAULT 0,
  `a24` tinyint(1) NOT NULL DEFAULT 0,
  `a25` tinyint(1) NOT NULL DEFAULT 0,
  `a26` tinyint(1) NOT NULL DEFAULT 0,
  `a27` tinyint(1) NOT NULL DEFAULT 0,
  `a28` tinyint(1) NOT NULL DEFAULT 0,
  `a29` tinyint(1) NOT NULL DEFAULT 0,
  `a30` tinyint(1) NOT NULL DEFAULT 0,
  `a31` tinyint(1) NOT NULL DEFAULT 0,
  `a32` tinyint(1) NOT NULL DEFAULT 0,
  `a33` tinyint(1) NOT NULL DEFAULT 0,
  `a34` tinyint(1) NOT NULL DEFAULT 0,
  `a35` tinyint(1) NOT NULL DEFAULT 0,
  `a36` tinyint(1) NOT NULL DEFAULT 0,
  `a37` tinyint(1) NOT NULL DEFAULT 0
)
```</x-markdown>
    </div>
    <p x-show="$wire.slide === 5" x-transition>Queries took forever to return your data...</p>
    <div wire:ignore x-transition x-show="$wire.slide === 5" class="w-full">
      <x-markdown>```sql
SELECT `id`, `name`, `a1`, `a2`
FROM `users`
WHERE `name` LIKE 'John%'
  AND `activated` = 1
  AND `a1` IN (1, 4, 6, 19);

+------+----------+----+----+
| id   | name     | a1 | a2 |
+------+----------+----+----+
| 1632 | John Doe |  4 |  0 |
+------+----------+----+----+

1 row retrieved starting from 1 in 23.521 s (execution: 23.247 s, fetching: 274 ms)
```</x-markdown>
    </div>
  </div>
</x-slides.title-and-body>
