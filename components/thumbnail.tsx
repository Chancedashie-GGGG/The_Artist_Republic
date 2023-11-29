import Button from "./button";
interface ThumbnailProps {
    title: string;
    thumbnail: string | undefined;
    link: string;
}

const Thumbnail: React.FC<ThumbnailProps> = ({
    title,
    thumbnail,
    link
}) => {
    return (
        <div className="bg-zinc-800 rounded-lg p-5 overflow-hidden w-96 hover:scale-95 transition ease-in-out duration-300">
            <img src={thumbnail} className="w-96 rounded-lg aspect-video object-cover" />
            <div className="pt-5"><div className="text-red-500 text-2xl font-semibold mb-2">{title}</div>
                <Button direct={link} label="WATCH VIDEO"></Button>
            </div>
        </div>
    );
}

export default Thumbnail;
