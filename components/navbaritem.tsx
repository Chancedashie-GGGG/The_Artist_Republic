interface NavbarItemProps {
    label: string;
}

const NavbarItem: React.FC<NavbarItemProps> = ({
    label
}) => {
    return (
        <div className="pr-3 flex gap-2 items-center cursor-pointer font-bold text-red-500 hover:text-red-400 transition">
            {label}
        </div>
    );
}

export default NavbarItem