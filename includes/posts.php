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
    'title' => 'Auth subsystem — open audit items',
    'summary' => 'Tracking open Q3 audit items on the staff portal auth stack.',
    'body' => '<p>Recording outstanding items from the Q3 audit on the staff portal authentication path. Owners listed.</p>
               <ul>
                 <li>· LDAP → internal DB migration — done (P. Gray)</li>
                 <li>· Session tokens: PHPSESSID → JWT (HS256) — done (S.)</li>
                 <li>· AUTH-117 — password storage hardening — open (S.)</li>
                 <li>· AUTH-118 — comparison semantics — open, flagged twice by elliot (S.)</li>
                 <li>· AUTH-201 — signing-key rotation to env — open (S.)</li>
               </ul>
               <p>Please update tickets, not threads. Quiet quarter for the team — let\'s not earn a louder one.</p>
               <p>— G. Goddard, AppSec</p>',
    'comments' => [
      ['by' => 'elliot', 'color' => 'green', 'when' => '30 Oct · 12:01', 'body' => 'AUTH-118 — sent two specific inputs at the staging endpoint last week. Both got accepted as the same identity. The handler does what PHP says it does, not what we want it to do. That is the bug.'],
      ['by' => 'samdev-evilcorp', 'color' => 'amber', 'when' => '30 Oct · 12:18', 'body' => 'Works as documented. PHP comparison semantics are a feature, not a bug. Closing the ticket end of week.'],
      ['by' => 'elliot', 'color' => 'green', 'when' => '30 Oct · 12:34', 'body' => 'It is a feature in the same way a wide-open door is a feature. Reopen the ticket.'],
      ['by' => 'tyrell', 'color' => 'red',   'when' => '30 Oct · 13:30', 'body' => 'Sam — AUTH-117, -118, AND -201. All three. By end of quarter. No exceptions.'],
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
    'id' => 5, 'cat' => 'Notice', 'author' => 'tyrell', 'date' => '2015-11-08 22:14',
    'title' => 'Reminder — internal source belongs internal',
    'summary' => 'Quarterly reminder from compliance: internal code on internal repositories. Always.',
    'body' => '<p>Brief from compliance.</p>
               <p>Twice this quarter we have had staff push internal artefacts to personal accounts on public hosts. The most recent — mid-October — was scrubbed within the hour by the responsible party. Force-push is not a delete. By the time the listing came down, the repository, the commit objects, and the metadata had been cached elsewhere. Browsers cache. Search services cache. Mirrors cache. None of those are operated by us.</p>
               <p>If you maintain a presence outside of E Corp infrastructure, that presence stays separate. <strong>Personal vanity handles — especially ones that include the company name — pair an account with internal artefacts the instant either becomes visible.</strong> The pattern is not subtle. Don\'t.</p>
               <p>Where rotation has been applied to the codebase but not to the running infrastructure, the operational impact may persist longer than the published commit suggests. Owners of affected services have been notified.</p>
               <blockquote>"What\'s published is public. There is no draft." — IX/4 §2.</blockquote>
               <p>— T. Wellick</p>',
    'comments' => [
      ['by' => 'gideon', 'color' => 'green', 'when' => '08 Nov · 22:55', 'body' => 'Tyrell — the October incident was reviewed and closed within the hour. Listing scrubbed, audit logged.'],
      ['by' => 'darlene','color' => 'cyan',  'when' => '08 Nov · 23:08', 'body' => 'Scrubbed from the listing. Cute. The crawl is the crawl.'],
      ['by' => 'samdev-evilcorp', 'color' => 'amber', 'when' => '09 Nov · 09:15', 'body' => 'Won\'t happen again. Apologies to the team. Lesson learned.'],
      ['by' => 'tyrell', 'color' => 'red',   'when' => '09 Nov · 09:40', 'body' => '14:00. My office. Bring the laptop.'],
    ],
  ],
];
