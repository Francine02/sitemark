<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Support\Facades\Auth;

class LinkService
{
    public function getLinks()
    {
        return Auth::user()
            ->links()
            ->orderBy('position')
            ->get();
    }

    public function getLink($id)
    {
        return Auth::user()
            ->links()
            ->findOrFail($id);
    }

    public function createLink(array $data, $image = null)
    {
        if ($image) {
            $data['image'] = $image->store('images', 'public');
        }

        $data['position'] = Auth::user()->links()->count();
        $data['color'] = $this->getColorByPlatform($data['stream_plataform']);

        return Auth::user()
            ->links()
            ->create($data);
    }

    public function updateLink(array $data, $image = null, $id)
    {
        $user = Auth::user();

        $link = $user->links()->find($id);

        if ($image) {
            $data['image'] = $image->store('images', 'public');
        }

        if (isset($data['stream_plataform'])) {
            $data['color'] = $this->getColorByPlatform($data['stream_plataform']);
        }

        $link->update($data);

        return $link;
    }

    public function updatePositions(array $order)
    {
        foreach ($order as $item) {
            Auth::user()
                ->links()
                ->where('id', $item['id'])
                ->update(['position' => $item['position']]);
        }
    }

    public function deleteLink($id)
    {
        $link = Link::where('id', $id)
            ->firstOrfail();

        $link->delete();

        return $link;
    }

    private function getColorByPlatform(string $platform): string
    {
        $platform = strtolower(trim($platform));
        $platform = str_replace(['+', '-', '_'], ' ', $platform);

        $colors = [
            'youtube' => '#FF4D4D',
            'twitch' => '#A970FF',
            'spotify' => '#3BE477',
            'netflix' => '#FF4D4D',
            'prime' => '#3FD8FF',
            'disney' => '#4D79FF',
            'hbo' => '#A259FF',
            'apple' => '#FF5C7A',
            'deezer' => '#FF8A3D',
            'soundcloud' => '#FF7A33',
            'tidal' => '#66FFFF',

            'tiktok' => '#FF4D8D',
            'instagram' => '#FF5E8A',
            'facebook' => '#4C8DFF',
            'twitter' => '#4DB8FF',
            'x' => '#333333',
            'kwai' => '#FF8C42',

            'globo' => '#FF8C42',
            'paramount' => '#4D8DFF',
            'star' => '#5A5AFF',
            'pluto' => '#33FFC1',

            'amazon music' => '#3FD8FF',
            'amazon' => '#3FD8FF',
            'pandora' => '#6C8CFF',
        ];

        foreach ($colors as $key => $color) {
            if (str_starts_with($platform, $key)) {
                return $color;
            }
        }

        return '#9CA3AF';
    }
}
