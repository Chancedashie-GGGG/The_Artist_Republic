
interface PictureProps {
    thumbnail: string | undefined;
}

const ThumbnailPic: React.FC<PictureProps> = ({
    thumbnail
}) => {
    return (
        <div className="bg-zinc-800 rounded-lg p-2 overflow-hidden w-36 aspect-square hover:scale-95 transition ease-in-out duration-300">
            <img src={thumbnail} className="w-full h-full rounded-lg object-cover" />
        </div>
    );
}

export default ThumbnailPic;
