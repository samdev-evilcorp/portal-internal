<?php
$POSTS = [
  [
    'id' => 1, 'cat' => 'Operations', 'author' => 'tyrell', 'date' => '2015-11-15 09:14',
    'title' => 'Steel Mountain Recertification Complete',
    'summary' => 'The biennial audit closed with no findings. A note of thanks to the on-site rotation team.',
    'body' => '<p>The biennial Uptime Institute audit concluded last week with zero remediation items. Steel Mountain remains the largest secure data facility in the western hemisphere, and our customers — all 847 million of them — sleep easier for it.</p>
               <p>A note of personal gratitude to the on-site rotation team who maintained operational tempo through what has been a complicated quarter. Your discipline is the backbone of this company.</p>
               <blockquote>"The system is greater than its parts. Each of you is a part."</blockquote>
               <p>— T. Wellick, Acting CTO</p>',
    'comments' => [
      ['by' => 'phillip', 'color' => 'red',   'when' => '15 Nov · 09:31', 'body' => 'Tyrell — outstanding work as always. The Board appreciates the precision.'],
      ['by' => 'angela',  'color' => 'amber', 'when' => '15 Nov · 11:02', 'body' => 'Congratulations to the operations team. Long days, but it pays off.'],
      ['by' => 'gideon',  'color' => 'green', 'when' => '15 Nov · 14:45', 'body' => 'AllSafe AppSec confirms no anomalous traffic during the audit window. Clean run.'],
    ],
  ],
  [
    'id' => 2, 'cat' => 'Notice', 'author' => 'phillip', 'date' => '2015-11-09 17:30',
    'title' => 'FBI Inquiry Closed — No Findings',
    'summary' => 'The federal inquiry from late September is officially closed. Continue business as usual.',
    'body' => '<p>I am pleased to announce that the federal inquiry which began in late September has been closed without findings. We thank the Bureau for their professionalism and cooperation throughout.</p>
               <p>I want to remind all staff that internal communications regarding investigations of any kind are governed by E Corp policy IX/4. Speak only with counsel. Loyalty above all.</p>
               <p>— P. Price, CEO</p>',
    'comments' => [
      ['by' => 'tyrell',  'color' => 'red',   'when' => '09 Nov · 17:42', 'body' => 'A relief for the company. The team has worked tirelessly through this period.'],
      ['by' => 'darlene', 'color' => 'cyan',  'when' => '09 Nov · 19:08', 'body' => 'How convenient.'],
      ['by' => 'gideon',  'color' => 'green', 'when' => '09 Nov · 19:14', 'body' => '@darlene — please review communications policy IX/4.'],
    ],
  ],
  [
    'id' => 3, 'cat' => 'Engineering', 'author' => 'gideon', 'date' => '2015-10-30 11:20',
    'title' => 'Internal Portal · Authentication Refactor (Tracking)',
    'summary' => 'Tracking the rollout of refactored auth on the staff portal. Q4 milestones below.',
    'body' => '<p>This is a tracking thread for the authentication subsystem refactor on the internal portal. Current milestones:</p>
               <ul>
                 <li>· October — credentials migrated from legacy LDAP to internal DB</li>
                 <li>· October — JWT-based session tokens replace PHPSESSID</li>
                 <li>· November — <strong>FIXME: switch md5() to password_verify()</strong> — Sam, are you on this?</li>
                 <li>· December — rotate hardcoded JWT signing key, move to env</li>
               </ul>
               <p>Comments on tickets, please. Loyalty above all.</p>',
    'comments' => [
      ['by' => 'sam',    'color' => 'amber', 'when' => '30 Oct · 11:45', 'body' => 'Will get to the password_verify migration after the audit. md5() with == comparison is "good enough" for shipping. Don\'t break anything.'],
      ['by' => 'elliot', 'color' => 'green', 'when' => '30 Oct · 12:01', 'body' => 'sam, "==" is loose. There are inputs that defeat it entirely. Should be ===.'],
      ['by' => 'sam',    'color' => 'amber', 'when' => '30 Oct · 12:18', 'body' => 'Noted. Backlog. Loyalty above all.'],
      ['by' => 'tyrell', 'color' => 'red',   'when' => '30 Oct · 13:30', 'body' => 'Resolve this before end of quarter. No exceptions.'],
    ],
  ],
  [
    'id' => 4, 'cat' => 'Newsroom', 'author' => 'angela', 'date' => '2015-10-12 16:00',
    'title' => 'Welcome to the Family — November Cohort',
    'summary' => 'Welcoming our newest staff joining across all departments. Loyalty above all.',
    'body' => '<p>This month we welcome 14 new staff to the E Corp family. Roles span AppSec, Customer Care, and Operations. Please reach out to your local HR contact for the welcome packet.</p>
               <p>— A. Moss, Marketing</p>',
    'comments' => [
      ['by' => 'phillip', 'color' => 'red', 'when' => '12 Oct · 16:14', 'body' => 'Welcome to the new cohort. The work matters.'],
    ],
  ],
  [
    'id' => 5, 'cat' => 'Notice', 'author' => 'darlene', 'date' => '2015-11-08 22:14',
    'title' => 'Heads up — old portal repo got pulled',
    'summary' => 'Sam pushed our pre-rotation portal source to his personal account before the migration. He pulled it down. You know how that goes.',
    'body' => '<p>Going to keep this short. Sometime back in October, <strong>Sam</strong> apparently mirrored an early build of the staff portal up to his personal GitHub — the username is <code>samdev-evilcorp</code>. Repo was named something innocuous, "portal-internal" or similar.</p>
               <p>Tyrell caught it during the rotation review. Sam force-pushed, marked the repo deleted, and assured everyone the history is "gone". The history is never gone. Anyone who looked at it during the window probably still has the commit references cached. If you didn\'t catch the early build, the metadata still resolves if you know where to look.</p>
               <p>This is a courtesy reminder of policy IX/4 — internal source code, internal repositories. Loyalty above all.</p>
               <blockquote>"The history is never gone." — D.</blockquote>',
    'comments' => [
      ['by' => 'tyrell', 'color' => 'red',   'when' => '08 Nov · 22:38', 'body' => 'Sam — you and I will speak tomorrow morning. 9 AM. My office. Bring everything.'],
      ['by' => 'sam',    'color' => 'amber', 'when' => '08 Nov · 23:02', 'body' => 'The repo is GONE. I pulled it. It is empty. There is nothing to find. Please calm down.'],
      ['by' => 'gideon', 'color' => 'green', 'when' => '09 Nov · 09:11', 'body' => 'Sam — "gone from the listing" is not "gone from the platform". Direct commit URLs continue to resolve. We have rotated the relevant secret in code but not in infra. This is a problem and you know it.'],
      ['by' => 'darlene','color' => 'cyan',  'when' => '09 Nov · 14:55', 'body' => 'Quick search of his profile turns it up in under a minute. Whatever.'],
    ],
  ],
];
