@props(['type' => 'image/x-icon', 'mask' => '#ffffff', 'microsoft' => ''])

		<x-orio.omi.link.favicon :type=$type />
		<x-orio.omi.link.favicon.icon rel="apple" />
		<x-orio.omi.link.favicon.icon rel="icon-32" />
		<x-orio.omi.link.favicon.icon rel="icon-16" />
		<x-orio.omi.link.favicon.manifest />
		<x-orio.omi.link.favicon.mask :color=$mask />
		<x-orio.omi.link.favicon.microsoft :color=$microsoft />
