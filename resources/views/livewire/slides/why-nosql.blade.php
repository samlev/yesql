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
  </div>
</x-slides.title-and-body>
