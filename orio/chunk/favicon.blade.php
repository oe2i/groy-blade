@props(['type' => 'image/x-icon', 'mask' => '#ffffff', 'microsoft' => ''])

		<x-groy.orio.link.favicon :type=$type />
		<x-groy.orio.link.favicon.icon rel="apple" />
		<x-groy.orio.link.favicon.icon rel="icon-32" />
		<x-groy.orio.link.favicon.icon rel="icon-16" />
		<x-groy.orio.link.favicon.manifest />
		<x-groy.orio.link.favicon.mask :color=$mask />
		<x-groy.orio.link.favicon.microsoft :color=$microsoft />
