import { IconType } from "react-icons";

interface NavbarItemProps {
    icon: IconType;
    label: string;
}

const NavbarItem: React.FC<NavbarItemProps> = ({
    icon: Icon,
    label
}) => {
    return (
        <div className="pr-3 flex gap-2 items-center cursor-pointer font-bold text-red-500 hover:text-red-400 transition">
            <Icon size={26}></Icon>
            {label}
        </div>
    );
}

export default NavbarItem