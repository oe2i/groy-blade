@props(['type' => 'ico', 'mask' => '#ffffff', 'microsoft' => ''])

<x-orio.link.favicon.favicon type='png' />
<x-orio.link.favicon.icon rel="apple" />
<x-orio.link.favicon.icon rel="icon-32" />
<x-orio.link.favicon.icon rel="icon-16" />
<x-orio.link.favicon.manifest />
<x-orio.link.favicon.mask :color=$mask />
<x-orio.link.favicon.microsoft :color=$microsoft />
