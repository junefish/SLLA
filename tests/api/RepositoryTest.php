<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RepositoryTest extends TestCase
{
    public function testDeleteEvent(): void
    {
        $stubMySql = $this->createMock();
        
        $stubMySql->expects($this->once())
        ->method('mysql_query')
        ->with(
              "SELECT id FROM calendar WHERE published = 2"
          );

        $subject = new Repository($stubMySql);

        $this->assertEquals('thing', $subject->DeleteEvent('id'));
    }
}